from django.shortcuts import render, HttpResponse, get_object_or_404
from django.http import HttpResponseRedirect
from django.views import generic
from django.utils.decorators import method_decorator
from django.contrib.auth.decorators import login_required
from django.http import JsonResponse
from django.contrib import messages
from datetime import datetime
from Task_Management.forms import ManageProjectForm
from Task_Management.models import ProjectFile, ManageProject, ManageTask
from django.urls import reverse


@method_decorator(login_required, name="dispatch")
class ProjectManageView(generic.TemplateView):
    form = ManageProjectForm
    template_name = 'Task-Management/project_management.html'

    def get(self, request, *args, **kwargs):
        get_project_data = ManageProject.objects.all()
        get_project_file=ProjectFile.objects.all()
        return render(request, self.template_name, {'form': self.form, 'get_project_data': get_project_data,'get_project_file':get_project_file})

    def post(self, request, *args, **kwargs):
        get_manageproject_form = self.form(request.POST)

        if get_manageproject_form.is_valid():
            StartDate = request.POST.get('startdate')
            StartDateSet = datetime.strptime(StartDate, "%m-%d-%Y")
            EndDate = request.POST.get('enddate')
            EndDateSet = datetime.strptime(EndDate, "%m-%d-%Y")
            saveproject_data = get_manageproject_form.save(commit=False)
            saveproject_data.start_date = StartDateSet
            saveproject_data.end_date = EndDateSet
            saveproject_data.created_by = request.user
            saveproject_data.save()

            if 'project_file' in request.FILES:
                for f in request.FILES.getlist('project_file'):
                    saveproject_file = ProjectFile(project_id=saveproject_data, project_file=f,
                                                   created_by=request.user)
                    saveproject_file.file_name = f.name
                    saveproject_file.save()

        return HttpResponseRedirect(reverse('task_management:ProjectManageView'))


class TaskManageView(generic.TemplateView):
    template_name = 'Task-Management/task_management.html'

    def get(self, request, *args, **kwargs):
        get_task_data = ManageTask.objects.all()
        return render(request, self.template_name, {'get_task_data': get_task_data})


class EditProjectView(generic.TemplateView):
    template_name = 'Task-Management/edit-project.html'

    def get(self, request, id, *args, **kwargs):
        project_instance = ManageProject.objects.get(id=id)
        form = ManageProjectForm(instance=project_instance)
        return render(request, self.template_name,
                      {'project_instance': project_instance, 'form': form,})

    def post(self, request, id, *args, **kwargs):
        get_project_instance = get_object_or_404(ManageProject, id=id)
        form = ManageProjectForm(request.POST or None, instance=get_project_instance)

        if form.is_valid():
            StartDate = request.POST.get('startdate')
            StartDateSet = datetime.strptime(StartDate, "%m-%d-%Y")
            EndDate = request.POST.get('enddate')
            EndDateSet = datetime.strptime(EndDate, "%m-%d-%Y")
            project_update=form.save(commit=False)
            project_update.start_date = StartDateSet
            project_update.end_date = EndDateSet
            project_update.created_by = request.user
            project_update.save()


        return HttpResponseRedirect(reverse('task_management:ProjectManageView'))


# @method_decorator(login_required, name="dispatch")
# @csrf_exempt
@login_required
def ProjectDeleteView(request, id):
    project_instance = get_object_or_404(ManageProject, id=id)
    ManageProject.objects.filter(id=project_instance.id).delete()
    return HttpResponseRedirect(reverse('task_management:ProjectManageView'))

from django.shortcuts import render, HttpResponse, get_object_or_404
from django.http import HttpResponseRedirect
from django.views import generic
from django.utils.decorators import method_decorator
from django.contrib.auth.decorators import login_required
from django.urls import reverse
from teams.forms import Get_Started_GuideForm
from teams.models import Guide_Attachment_File, Get_Started_Guide
from django.template.loader import render_to_string
from django.template.defaulttags import register

@method_decorator(login_required, name="dispatch")
class TeamsView(generic.TemplateView):
    Gs_form = Get_Started_GuideForm
    template_name = 'teams/get-started.html'

    def get(self, request, *args, **kwargs):
        get_started_data = Get_Started_Guide.objects.all()
        get_file=Guide_Attachment_File.objects.all()
        return render(request, self.template_name, {'Gs_form': self.Gs_form, 'get_started_data': get_started_data,'get_file':get_file})

    def post(self, request, *args, **kwargs):
        Gs_form = self.Gs_form(request.POST, request.FILES)

        if Gs_form.is_valid():
            save_get_started_data = Gs_form.save(commit=False)
            save_get_started_data.created_by = request.user
            team = request.POST['team']
            save_get_started_data.team = team
            save_get_started_data.save()
            if 'attachment' in request.FILES:
                for f in request.FILES.getlist('attachment'):
                    save_get_started_file = Guide_Attachment_File(get_started_guide_id=save_get_started_data, file=f,
                                                                  created_by=request.user)
                    save_get_started_file.save()
        return HttpResponseRedirect(reverse('teams:TeamsView'))



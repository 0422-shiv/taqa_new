# from django.shortcuts import render, HttpResponse, redirect
# from django.views import generic
# from django.utils.decorators import method_decorator
# from django.contrib.auth.decorators import login_required
# from django.http import JsonResponse
# from django.contrib import messages
# from django.template.defaulttags import register
# from role.models import Role, Permission
# from django.template.loader import render_to_string
#
#
# @method_decorator(login_required, name="dispatch")
# class RoleView(generic.TemplateView):
#     template_name = 'role/role-permission.html'
#
#     def get(self, request, *args, **kwargs):
#         get_role = Role.objects.all()
#         return render(request, self.template_name,
#                       {'get_role': get_role})
#
#     def post(self, request, *args, **kwargs):
#         if request.method == "POST":
#             role_name = request.POST["role_name"]
#             get_permissions_in_list = request.POST.getlist('checkboxdata')
#             print(role_name)
#             print(get_permissions_in_list)
#             get_objects_of_permissions = Permission.objects.filter(
#                 id__in=get_permissions_in_list)
#             print(get_objects_of_permissions)
#             role_data = Role(role_name=role_name, created_by=request.user)
#             role_data.save()
#             role_data.permission.set(get_objects_of_permissions)
#             role_data.save()
#             return redirect("http://127.0.0.1:8000/role-permissions/")
#
#
# @register.filter(name='get_permissions')
# def get_permissions(cate_name):
#     get_data = None
#     if Permission.objects.filter(categories=cate_name).exists():
#         get_data = Permission.objects.filter(categories=cate_name)
#
#     return render_to_string('role/get_permissions.html', {'cate_name': cate_name, 'get_data': get_data})
#
# #

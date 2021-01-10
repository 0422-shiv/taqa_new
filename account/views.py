from django.http import HttpResponseRedirect
from django.shortcuts import render, HttpResponse, get_object_or_404
from django.views import generic
from django.utils.decorators import method_decorator
from django.contrib.auth.decorators import login_required
from django.contrib.auth.models import User, auth
# from role.models import Role
from datetime import datetime
from account.models import UserProfile
from django.urls import reverse
from django.http import JsonResponse
from django.views.decorators.csrf import csrf_exempt


@method_decorator(login_required, name="dispatch")
class CreateUserView(generic.TemplateView):

    template_name = 'account/manage-accounts.html'

    def get(self, request, *args, **kwargs):
        # get_role = Role.objects.all()
        get_user = UserProfile.objects.all()
        return render(request, self.template_name,
                      { 'get_user': get_user})

    def post(self, request, *args, **kwargs):
        if request.method == "POST":
            username = request.POST["username"]
            email = request.POST["email"]
            phone = request.POST["phone"]
            password = request.POST["password"]
            # role = int(request.POST["role"])
            role = request.POST["role"]
            branch = request.POST["branch"]
            city = request.POST["city"]
            country = request.POST["country"]
            address = request.POST["address"]
            user_data = User.objects.create(username=username, email=email, password=password)
            user_data.set_password(user_data.password)
            user_data.save()
            # get_role = get_object_or_404(Role, id=role)
            userprofile = UserProfile(userx=user_data, phone=phone, role=role, branch=branch, city=city,
                                      country=country,
                                      address=address,
                                      created_dt=datetime.now(), created_by=request.user)

            userprofile.save()

            return HttpResponseRedirect(reverse('account:CreateUserView'))

@method_decorator(login_required, name="dispatch")
class EditUserAccountView(generic.TemplateView):
    template_name = 'account/edit-account.html'

    def get(self, request, id, *args, **kwargs):
        user_instance = get_object_or_404(UserProfile, id=id)
        # role_data = Role.objects.all()
        return render(request, self.template_name,
                      {'user_data': user_instance})

    def post(self, request, id, *args, **kwargs):

        if request.method == "POST":
            username = request.POST["username"]
            email = request.POST["email"]
            phone = request.POST["phone"]
            password = request.POST["password"]
            # role = int(request.POST["role"])
            role = request.POST["role"]
            branch = request.POST["branch"]
            city = request.POST["city"]
            country = request.POST["country"]
            address = request.POST["address"]
            if UserProfile.objects.filter(id=id).exists():
                userprofile_instance = get_object_or_404(UserProfile, id=id)
                User.objects.filter(username=userprofile_instance.userx).update(username=username, email=email,
                                                                                password=password)
                user_instance = get_object_or_404(User, username=userprofile_instance.userx)
                user_instance.set_password(user_instance.password)
                user_instance.save()

            # get_role = get_object_or_404(Role, id=role)
                UserProfile.objects.filter(id=id).update(phone=phone, role=role, branch=branch, city=city,
                                                     country=country,
                                                     address=address,
                                                     created_dt=datetime.now(), created_by=request.user)

        return HttpResponseRedirect(reverse('account:CreateUserView'))


# @method_decorator(login_required, name="dispatch")
@csrf_exempt
def UserDeleteView(request, id):

    userprofile_instance = get_object_or_404(UserProfile, id=id)
    User.objects.filter(username=userprofile_instance.userx).delete()
    return HttpResponseRedirect(reverse('account:CreateUserView'))


@method_decorator(login_required, name="dispatch")
# @csrf_exempt
class UserStatusView(generic.TemplateView):
    template_name = 'account/manage-accounts.html'

    def post(self, request, *args, **kwargs):

        userstatusid = request.POST["userstatusid"]
        userstatus = request.POST["userstatus"]

        if userstatus == "True":
            status = False
        else:
            status = True
        if UserProfile.objects.filter(id=userstatusid).exists():
            userprofile_instance = get_object_or_404(UserProfile, id=userstatusid)
            User.objects.filter(id=userprofile_instance.userx.id).update(is_active=status)
        return JsonResponse({'message':'Status Changed successfully.'})

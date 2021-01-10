# from django.shortcuts import render, HttpResponse
# from django.views import generic
# from django.utils.decorators import method_decorator
# from django.contrib.auth.decorators import login_required
# from django.http import JsonResponse
# from django.contrib import messages
#
#
#
# @method_decorator(login_required, name="dispatch")
# class DashboardView(generic.TemplateView):
#     template_name = 'dashboard/dashboard.html'
#
#     def get(self, request, *args, **kwargs):
#
#         return render(request, self.template_name,
#                       {})
# Import some useful packages.
from django.urls import path

from . import views

# Define urls for User Application function.
urlpatterns = [


    path('projectmanage', views.ProjectManageView.as_view(), name="ProjectManageView"),
    path('taskmanage', views.TaskManageView.as_view(), name="TaskManageView"),
    path('edit-project/<str:id>', views.EditProjectView.as_view(), name="EditProjectView"),
    path('delete/<str:id>', views.ProjectDeleteView, name="ProjectDeleteView"),


]
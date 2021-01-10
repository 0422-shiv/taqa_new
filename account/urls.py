# Import some useful packages.
from django.urls import path
from django.contrib.auth.models import User, auth
from . import views

# Define urls for User Application function.
urlpatterns = [
path('manage-accounts', views.CreateUserView.as_view(), name="CreateUserView"),
path('edit/<str:id>', views.EditUserAccountView.as_view(), name="EditUserAccountView"),
path('delete/<str:id>', views.UserDeleteView, name="UserDeleteView"),
path('userstatus', views.UserStatusView.as_view(), name="UserStatusView"),
]
# Import some useful packages.
from django.urls import path

from . import views

# Define urls for User Application function.
urlpatterns = [


    path('', views.TeamsView.as_view(), name="TeamsView"),

]
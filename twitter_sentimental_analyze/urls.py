from django.urls import path,include
from . import views
from django.contrib.auth import views as auth_login

urlpatterns = [
    # path('', views.add_invite_user.as_view(),name="add_invite_user"),
    path('', views.sentimental_index.as_view(),name="sentimental_index"),
    path('analyze-data/', views.analyzing.as_view(),name="analyzing"),
     path('data/', views.example.as_view(),name="example"),
    
    
]


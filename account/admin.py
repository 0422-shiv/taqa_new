from django.contrib import admin
from account.models import UserProfile
from django.contrib.admin.options import ModelAdmin



class UserProfileAdmin(ModelAdmin):
    list_display = ["userx", "phone",
                    "city","country","address"]



admin.site.register(UserProfile, UserProfileAdmin)


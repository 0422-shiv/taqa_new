from django.contrib import admin
from .models import Get_Started_Guide, Guide_Attachment_File
from django.contrib.admin.options import ModelAdmin


class Get_Started_GuideAdmin(ModelAdmin):
    list_display = ["team", "img", "title",  "created_dt",
                    "created_by", "update_dt"]


class Guide_Attachment_FileAdmin(ModelAdmin):
    list_display = ["get_started_guide_id",  "created_dt",
                    "created_by"]


admin.site.register(Get_Started_Guide, Get_Started_GuideAdmin)
admin.site.register(Guide_Attachment_File, Guide_Attachment_FileAdmin)

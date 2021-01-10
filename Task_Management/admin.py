from django.contrib import admin
from .models import ProjectFile, ManageProject, TaskFile, ManageTask
from django.contrib.admin.options import ModelAdmin
# Register your models here.


class ProjectFileAdmin(ModelAdmin):
    list_display = ["file_name", "project_file","created_dt",
                    "created_by"]

class ManageProjectAdmin(ModelAdmin):
    list_display = ["project_name","start_date","end_date","estimate_hours", "created_dt",
                    "created_by"]
class TaskFileAdmin(ModelAdmin):
    list_display = ["file_name", "task_file","created_dt",
                    "created_by"]

class ManageTaskAdmin(ModelAdmin):
    list_display = ["task_name","estimate_hours","priority","start_date","end_date", "created_dt",
                    "created_by"]
admin.site.register(ProjectFile, ProjectFileAdmin)
admin.site.register(ManageProject, ManageProjectAdmin)
admin.site.register(TaskFile, TaskFileAdmin)
admin.site.register(ManageTask, ManageTaskAdmin)
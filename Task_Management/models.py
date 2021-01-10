from django.db import models
import datetime,django
from django.contrib.auth.models import User
# Create your models here.

class ManageProject(models.Model):

    project_name= models.CharField(max_length=50, null=True, blank=True)
    description = models.TextField(max_length=500, null=True, blank=True)
    start_date=models.DateField(null=True, blank=True)
    end_date=models.DateField(null=True, blank=True)
    estimate_hours= models.CharField(max_length=50, null=True, blank=True)
    created_dt = models.DateTimeField(default=django.utils.timezone.now)
    created_by = models.ForeignKey(User, related_name='project_created_by', on_delete=models.CASCADE)

    def __str__(self):
        return self.project_name

class ProjectFile(models.Model):
    project_id = models.ForeignKey(ManageProject, related_name='manageproject', on_delete=models.CASCADE)
    file_name = models.CharField(max_length=50, null=True, blank=True)
    project_file=models.FileField(upload_to='projectfile', max_length=254, null=True, blank=True)
    created_dt = models.DateTimeField(default=django.utils.timezone.now)
    created_by = models.ForeignKey(User, related_name='file_created_by', on_delete=models.CASCADE)

    def __str__(self):
        return self.file_name

class ManageTask(models.Model):

    task_name= models.CharField(max_length=50, null=True, blank=True)
    description = models.TextField(max_length=500, null=True, blank=True)
    estimate_hours = models.CharField(max_length=50, null=True, blank=True)
    priority= models.CharField(max_length=50, null=True, blank=True)
    project_id = models.ForeignKey(ManageProject, related_name='managetask', on_delete=models.CASCADE)
    start_date=models.DateField(null=True, blank=True)
    end_date=models.DateField(null=True, blank=True)
    task_member=models.ManyToManyField(User, verbose_name="user ")
    created_dt = models.DateTimeField(default=django.utils.timezone.now)
    created_by = models.ForeignKey(User, related_name='task_created_by', on_delete=models.CASCADE)

    def __str__(self):
        return self.task_name
class TaskFile(models.Model):
    task_id = models.ForeignKey(ManageTask, related_name='managetask', on_delete=models.CASCADE)
    file_name = models.CharField(max_length=50, null=True, blank=True)
    task_file=models.FileField(upload_to='taskfile', max_length=254, null=True, blank=True)
    created_dt = models.DateTimeField(default=django.utils.timezone.now)
    created_by = models.ForeignKey(User, related_name='task_file_created_by', on_delete=models.CASCADE)

    def __str__(self):
        return self.file_name
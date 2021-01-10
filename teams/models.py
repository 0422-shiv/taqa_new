from django.db import models
import datetime,django
from django.contrib.auth.models import User


class Get_Started_Guide(models.Model):

    team= models.CharField(max_length=50, null=True, blank=True)
    img = models.FileField(upload_to='file', max_length=254, null=True, blank=True)
    title = models.CharField(max_length=50, null=True, blank=True)
    description = models.TextField(max_length=500, null=True, blank=True)
    created_dt = models.DateTimeField(default=django.utils.timezone.now)
    created_by = models.ForeignKey(User, related_name='get_started_guide_created_by', on_delete=models.CASCADE)
    update_dt = models.DateTimeField(default=django.utils.timezone.now)



    def __str__(self):
        return self.title

class Guide_Attachment_File(models.Model):
    get_started_guide_id = models.ForeignKey(Get_Started_Guide, related_name='get_started_guide_id', on_delete=models.CASCADE)
    file=models.FileField(upload_to='get_started_file', max_length=254, null=True, blank=True)
    created_dt = models.DateTimeField(default=django.utils.timezone.now)
    created_by = models.ForeignKey(User, related_name='attachment_file_created_by', on_delete=models.CASCADE)


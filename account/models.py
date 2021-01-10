from django.db import models
from django.contrib.auth.models import User
import django
# from role.models import Role


class UserProfile(models.Model):
    userx = models.OneToOneField(User, on_delete=models.CASCADE)
    phone = models.BigIntegerField()
    # role = models.ForeignKey(
    #     Role, verbose_name="role", on_delete=models.CASCADE)
    role = models.CharField(max_length=50, null=True, blank=True)
    branch= models.CharField(max_length=50, null=True, blank=True)
    city = models.CharField(max_length=50, null=True, blank=True)
    country = models.CharField(max_length=50, null=True, blank=True)
    address = models.TextField(max_length=500, null=True, blank=True)
    created_dt = models.DateTimeField(default=django.utils.timezone.now)
    created_by = models.ForeignKey(User, related_name='user_created_by', on_delete=models.CASCADE)

    def __init__(self, *args, temp=65, **kwargs):
        self.temp = temp
        return super().__init__(*args, **kwargs)
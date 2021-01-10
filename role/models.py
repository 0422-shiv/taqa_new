# from django.db import models
# from django.utils.translation import ugettext_lazy
# import django
# from django.contrib.auth.models import User
#
#
# # Create your models here.
# class Permission(models.Model):
#     permission_name = models.CharField(ugettext_lazy('Name'), max_length=50, blank=True, null=True, db_column="name")
#     categories=models.CharField(ugettext_lazy('categories'), max_length=50, blank=True, null=True, db_column="categories")
#     created_dt = models.DateTimeField(default=django.utils.timezone.now)
#     created_by = models.ForeignKey(User, related_name='permission_created_by', on_delete=models.CASCADE)
#
#     def __str__(self):
#         return self.permission_name
#
# class Role(models.Model):
#     role_name = models.CharField(ugettext_lazy('Name'), max_length=50, blank=True, null=True, db_column="name")
#     publish_status = models.BooleanField(ugettext_lazy('Publish Status'), default=False, db_column="publish_status")
#     permission = models.ManyToManyField(Permission, verbose_name="permission ")
#     created_dt = models.DateTimeField(default=django.utils.timezone.now)
#     created_by = models.ForeignKey(User, related_name='role_created_by', on_delete=models.CASCADE)
#
#     def __str__(self):
#         return self.role_name
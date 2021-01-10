# Generated by Django 3.1.4 on 2021-01-08 04:35

from django.conf import settings
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
        ('Task_Management', '0004_managetask_taskfile'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='managetask',
            name='task_member',
        ),
        migrations.AddField(
            model_name='managetask',
            name='task_member',
            field=models.ManyToManyField(to=settings.AUTH_USER_MODEL, verbose_name='user '),
        ),
    ]
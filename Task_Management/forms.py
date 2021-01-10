from django import forms

from Task_Management.models import ManageProject


class ManageProjectForm(forms.ModelForm):
    project_name = forms.CharField(widget=forms.TextInput(
        attrs={"class": "form-control", 'name': 'project_name'}))
    description = forms.CharField(widget=forms.Textarea(
        attrs={"id": "summernote", 'name': 'description'}))

    estimate_hours = forms.CharField(widget=forms.TextInput(
        attrs={"class": "form-control", 'placeholder': "HH:MM", 'name': 'estimate_hours'}))

    class Meta:
        model = ManageProject
        fields = ['project_name', 'description', 'estimate_hours']

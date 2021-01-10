from django import forms

from .models import Get_Started_Guide


class Get_Started_GuideForm(forms.ModelForm):
    img = forms.ImageField()

    title = forms.CharField(widget=forms.TextInput(
        attrs={"class": "form-control", 'name': 'title', 'placeholder': "Title"}))

    description = forms.CharField(widget=forms.Textarea(
        attrs={'class':'form-control height', 'name': 'description', 'placeholder': "Description"}))

    class Meta:
        model = Get_Started_Guide
        fields = ['img', 'title', 'description']

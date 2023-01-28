from django.shortcuts import render
from django.http import HttpResponse
from django.template import loader

# Create your views here.
from .models import Tipo_Documento, Ciudad, Persona

def index(request):
    ciudades = Ciudad.objects.all()
    template = loader.get_template('books/index.html')
    context = {
        'ciudades':ciudades
    }
    return HttpResponse(template.render(context, request))
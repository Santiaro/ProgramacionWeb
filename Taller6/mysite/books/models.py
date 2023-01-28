from django.db import models

# Create your models here.
class Tipo_Documento(models.Model):
    nombre = models.CharField(max_length=30)
    descripcion = models.CharField(max_length=150)
class Ciudad(models.Model):
    nombre = models.CharField(max_length=30)
    descripcion = models.CharField(max_length=150)   
class Persona(models.Model):
    nombres = models.CharField(max_length=30)
    apellidos = models.CharField(max_length=30) 
    id_tipo_documento = models.ForeignKey(Tipo_Documento, on_delete=models.CASCADE)
    documento = models.IntegerField(max_length=15)
    Lugar_Residencia = models.ForeignKey(Ciudad, on_delete=models.CASCADE)
    fecha_nacimiento = models.DateField
    email = models.CharField(max_length=50)
    telefono = models.IntegerField(max_length=10)
    usuario = models.CharField(max_length=30)
    password = models.CharField(max_length=30)

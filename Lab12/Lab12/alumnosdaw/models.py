from django.db import models

# Create your models here.
from pygments.lexers import get_all_lexers
from pygments.styles import get_all_styles

LENGUAJE_CHOICES = (
    ('Javascript', 'Javascript'),
    ('PHP', 'PHP'),
    ('Python', 'Python'),
    ('Java', 'Java'),
)

class AlumnoDAW(models.Model):
    nombre = models.CharField(max_length=40)
    apellido = models.CharField(max_length=40)
    lenguaje = models.CharField(max_length=40, choices=LENGUAJE_CHOICES, default='PHP')

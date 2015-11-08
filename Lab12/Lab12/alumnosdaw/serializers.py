from rest_framework import serializers
from .models import AlumnoDAW

class AlumnoDAWSerializer(serializers.ModelSerializer):
    class Meta:
        model = AlumnoDAW
        fields = ('id', 'nombre', 'apellido', 'lenguaje')

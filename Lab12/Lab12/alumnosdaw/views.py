from django.shortcuts import render

# Create your views here.

from django.http import HttpResponse
from django.views.decorators.csrf import csrf_exempt
from rest_framework.renderers import JSONRenderer
from rest_framework.parsers import JSONParser
from .models import AlumnoDAW
from .serializers import AlumnoDAWSerializer
from rest_framework.views import APIView
from rest_framework.response import Response
from rest_framework.decorators import api_view
from rest_framework import status

class AlumnoDAWList(APIView):
    def get(self, request, format=None):
        alumnosdaw = AlumnoDAW.objects.all()
        serializer = AlumnoDAWSerializer(alumnosdaw, many=True)
        return Response(serializer.data)

    def post(self, request, format=None):
        serializer = AlumnoDAWSerializer(data=request.data)
        if serializer.is_valid():
            serializer.save()
            return Response(serializer.data, status=status.HTTP_201_CREATED)
        return Response(serializer.errors, status=status.HTTP_400_BAD_REQUEST)

class AlumnoDAWDetail(APIView):
    def get_object(self, pk):
        try:
            return AlumnoDAW.objects.get(pk=pk)
        except AlumnoDAW.DoesNotExist:
            raise Http404

    def get(self, request, pk, format=None):
        alumnodaw = self.get_object(pk)
        serializer = AlumnoDAWSerializer(alumnodaw)
        return Response(serializer.data)

    def put(self, request, pk, format=None):
        alumnodaw = self.get_object(pk)
        serializer = AlumnoDAWSerializer(alumnodaw, data=request.data)
        if serializer.is_valid():
            serializer.save()
            return Response(serializer.data)
        return Response(serializer.errors, status=status.HTTP_400_BAD_REQUEST)

    def delete(self, request, pk, format=None):
        alumnodaw = self.get_object(pk)
        alumnodaw.delete()
        return Response(status=status.HTTP_204_NO_CONTENT)

def mainView(request):
    return render(request, 'main.html')

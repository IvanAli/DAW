from django.conf.urls import url
from alumnosdaw import views
from rest_framework.urlpatterns import format_suffix_patterns

urlpatterns = [
    url(r'^alumnos/$', views.AlumnoDAWList.as_view()),
    url(r'^alumnos/(?P<pk>[0-9]+)/$', views.AlumnoDAWDetail.as_view()),
    url(r'^$', views.mainView, name='mainView'),
]

urlpatterns = format_suffix_patterns(urlpatterns)

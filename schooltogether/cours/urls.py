from django.urls import path, include
from . import views

urlpatterns = [
    path('', views.index, name='index'),
    path('recherche', views.recherche, name='recherche'),
    path('tickets', views.tickets, name='tickets'),
    path('upload', views.upload, name='upload'),
    path('mescours', views.mescours, name='mescours'),
    path('perso', views.perso, name='perso'),
]
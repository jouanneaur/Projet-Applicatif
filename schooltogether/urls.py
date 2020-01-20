
from django.contrib import admin
from django.urls import include, path

urlpatterns = [
    path('cours/', include('cours.urls')),
    path('admin/', admin.site.urls),
]
from django.shortcuts import get_object_or_404, render
from django.http import HttpResponse

from .models import post, document


def index(request):
    return HttpResponse("You're looking at recherche index.")

def recherche(request):
    latest_documents = document.objects.order_by('-date_document')
    context = {'latest_documents': latest_documents}
    return render(request, 'recherche/recherche.html', context)
    

#def recherche_detail(request, question_id):
#    response = "You're looking at the results of question %s."
#   return HttpResponse(response % question_id)
def tickets(request):
    return HttpResponse("You're voting on tickets.")

def upload(request):
    return HttpResponse("You're voting on upload.")

def mescours(request):
    return HttpResponse("You're voting on mescours.")

def perso(request):
    return HttpResponse("You're voting on perso.")

from django.db import models


class document(models.Model):
    matiere = models.CharField(max_length=200)
    filere = models.CharField(max_length=200)
    nom_document = models.CharField(max_length=200)
    niveau_etude = models.CharField(max_length=200)
    date_document = models.DateField('date published')
    description_document = models.CharField(max_length=200)
    notation_document = models.IntegerField()
    def __str__(self):
        return self.nom_document 


class post(models.Model):
    #user = models.ForeignKey(user, on_delete=models.CASCADE)
    titre_topic = models.CharField(max_length=200)
    titre_categorie = models.CharField(max_length=200)
    titre_post = models.CharField(max_length=200)
    text_post = models.CharField(max_length=200)
    time_post = models.DateTimeField('date published')
    def __str__(self):
        return self.titre_post


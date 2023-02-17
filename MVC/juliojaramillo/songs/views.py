from django.shortcuts import render, redirect
from .models import Song
from .forms import SongForm

def index(request):
    songs = Song.objects.all()
    form = SongForm()
    if request.method == 'POST':
        form = SongForm(request.POST)
        if form.is_valid():
            form.save()
            return redirect('index')
    context = {
        'songs': songs,
        'form': form,
    }
    return render(request, 'songs/index.html', context)


def index(request):
    songs = Song.objects.all()
    if request.method == 'POST':
        form = SongForm(request.POST)
        if form.is_valid():
            form.save()
    else:
        form = SongForm()
    return render(request, 'songs/index.html', {'songs': songs, 'form': form})

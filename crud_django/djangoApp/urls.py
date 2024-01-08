from django.urls import path, include
from djangoApp.views import home, userCreate
urlpatterns = [
    path('', home.as_view(), name="home"),
    path('userCreate/', userCreate.as_view(), name="userCreate"),
]

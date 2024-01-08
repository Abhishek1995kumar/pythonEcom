from django.shortcuts import render, HttpResponse
from djangoApp.models import UserDetails
from django.http import JsonResponse
# Create your views here.
from django.views.generic import ListView, DetailView, View, FormView
class home(ListView):
    model=UserDetails
    template_name="home.html"
    context_object_name="userdata"

class userCreate(View):
    greeting="Good Bye!!"
    def get(self, request):
        fname=request.GET.get('fname')
        lname=request.GET.get('lname')
        mobile=request.GET.get('mobile')
        address=request.GET.get('address')
        email=request.GET.get('email')
        password=request.GET.get('password')
        collect_data=[fname, lname, address, mobile, email, password]
        UserDetails.objects.create(fname=fname, lname=lname, address=address, mobile=mobile, email=email, password=password)
        print(collect_data)

        usrdetails={
            "id":UserDetails.id,
            "fname":UserDetails.fname,
            "lname":UserDetails.lname,
            "address":UserDetails.address,
            "mobile":UserDetails.mobile,
            "email":UserDetails.email,
            "password":UserDetails.password,
        }
        return JsonResponse(usrdetails)
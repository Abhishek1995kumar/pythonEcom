# 1) install django

# 2) check django commamds -- django-admin

# You are trying to add a non-nullable field 'category' to product without a default; we can't do that (the database needs something to populate existing rows).Please select a fix:
#  1) Provide a one-off default now (will be set on all existing rows with a null value for this column)
#  2) Quit, and let me add a default in models.py
# Select an option:
            # Ans-- agar yesa error aata hai tab hamko category=models.ForeignKey(Category, on_delete=models.CASCADE) iss field
                    # me default value set karni hoti hai, ki pehle se agar koi data hai tabble me tab uss dataki kya value honi chahiye, ye djago puchta hai to ham 
                    #  kar dete hai



# 3) Product object (2) -- agar hamko admin site me iss type se data show ho rha hai aur usko table ke form 
                            # me show karna hoo tab ham admin.py me class defined karte hai like --

                        # class AdminProduct(admin.ModelAdmin):
                        #     list_display=['name', 'price', 'description', 'image', 'category']

                        # class AdminCategory(admin.ModelAdmin):
                        #     list_display=['name', 'category']

                        # admin.site.register(Product, AdminProduct)
                        # admin.site.register(Category, AdminCategory)

            # yaha par Product ka data aur Category ka data ab table ke form me show hoga 
            # but Product tabble me abhi bhi category table ka data (Category object (3)) ke form me hi
            # show hoga yesa iss liye kyoki category field ek foreignkey hai product table me iss liye
            # but issko solve karne ke liye hamko method override ka use karna hoga 
            # Category.py model file me
            

n=int(input("enter your pattern number : "))
# for x in range(n):
#     print((str(x+1)+'  ')*n, end='\n')

# for x in range(n):
#     # print(("a"+ '   ')*n, end='\n')
#     print((chr(65)+ '   ')*n, end='\n')

# for x in range(n):
#     print('   '*(n-x-1)+chr(x), end='')
#     if x>=1:
#         print('   '*(2*x-1)+chr(x), end='')
#     print()

print("hello  abhishek")



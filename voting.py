# voting list
age=int(input("enter age:"))
country=input("enter country:")
nationalities=["kenyan","tanzanian","ugandan"]
if age>=18 and country in nationalities:
    print("vote")
else:
    print("cant vote")
    

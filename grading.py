# grading
mark1=int(input("enter mark1"))
if mark1<0:
    print("negative")
mark2=int(input("enter mark2"))
if mark2<0:
    print("negative")
mark3=int(input("enter mark3"))
if mark3<0:
    print("negative")
avg=((mark1+mark2+mark3)/3)
if (avg>70 and avg<=100):
    print("A")
elif(avg>60 and avg<=69):
    print("B")
elif(avg>50 and avg<=59):
    print("C")
elif(avg>40 and avg<=49):
    print("D")
elif(avg>0 and avg<=39):
    print("FAIL")


class Animal:
    def legs(self):
     print("i have four legs")
    
    def fur(self):
     print("i have fur")
    
class Dog(Animal):
    def bark(self):
     print("i bark")
    
d=Dog()
d.bark()
d.legs()
d.fur()

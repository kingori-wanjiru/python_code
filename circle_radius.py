#Circle
class Circle:
    def __init__(self,radius):
      self.radius=radius
    
    def area(self):
      return 3.142*self.radius*self.radius

    def perimeter(self):
      return 4.142*2*self.radius

c=Circle(5)
print(c.area())
print(c.perimeter())

    



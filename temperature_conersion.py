#Temperature
class Temperature:
    def __init__(self,celcius,farenheit):
      self.celcius=celcius
      self.farenheit=farenheit
      
    def convert_farenheit(self):
       return (9/5*self.celcius)+(32)
    def convert_celcius(self):
       return (5/9*self.farenheit)+(32)

t=Temperature(78,90)
print(t.convert_farenheit())
print(t.convert_celcius())

    


    
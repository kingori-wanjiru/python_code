class schools:
    def funds(self):
        print("schools get funds yearly from the country")
        
class county:
    def money(self):
        print("county receives resouces monthly")
        
class country(schools,county):
    def resources(self):
        print("the country has resources")
        
s=country()
s.resources()
s.money()
s.funds()
        
    

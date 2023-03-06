class schools:
    def gate(self):
        print("people use the school gates everyday")
        
    def lib(self):
        print("the schools libraries have alot of books")
        
    def lecturers(self):
        print("there are both male and female lecturers in the schools")
    
    def students (self):
        print("the schools have both kenyan and international students")
        
class ruiru(schools):
    def county(self):
        print("ruiru is small county with schools")
        
c=ruiru()
c.county()
c.gate()
c.lib()
c.students()
c.lecturers()
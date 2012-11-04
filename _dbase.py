#-*- coding: utf-8 -*-

class DatabaseWarpper:
    def readQueue(self):
        # Read out database queued new microblogs
        self.executeSQL("SELECT * FROM queue")

class MysqlWarpper(DatabaseWarpper):
    def __init__(self,host,port,username,password,dbname):
        pass
    def executeSQL(self,sql):
        pass

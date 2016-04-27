# Copyright 2012 Digital Inspiration
# http://www.labnol.org/


from google.appengine.ext import webapp
from google.appengine.ext.webapp import util
from google.appengine.ext.webapp import template
import webapp

class MainHandler(webapp.RequestHandler):
    def get(self):
        self.response.write('index.php')

app = webapp.WSGIApplication([
    ('/', MainHandler)
], debug=True)

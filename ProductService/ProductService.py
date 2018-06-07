from flask import Flask
from flask_restful import Resource, Api

app = Flask(__name__)
api = Api(app)

class ProductService(Resource):
    def get(self):
        return {
            # For now, we'll hardcode the products
            # Later on, we'll try to get this from DB
            'products': ['.COM Domain Names',
                         'CloudSites',
                         'SSL Certificate',
                         'G Suite']
        }

api.add_resource(ProductService, '/')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)
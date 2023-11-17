# app.py
from flask import Flask, render_template, request, redirect, url_for

app = Flask(__name__)

employees = []

@app.route('/')
def index():
    return render_template('index.html', employees=employees)

@app.route('/add_employee', methods=['POST'])
def add_employee():
    name = request.form.get('name')
    position = request.form.get('position')
    employees.append({'name': name, 'position': position})
    return redirect(url_for('index'))

if __name__ == '__main__':
    app.run(debug=True)

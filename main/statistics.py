import pymysql
import dash
import sys
from dash.dependencies import Output, Input
import dash_core_components as dcc
import dash_html_components as html
import plotly.graph_objs as go

# some other statements  with the help of cursor

def expenseStats(cursor, app, id):
    select = "SELECT * FROM expense WHERE userID=" + id

    #executing the queries
    cursor.execute(select)
    rows = cursor.fetchall()
    # for row in rows:
    #     print(row)

    # data = [info[i].split(",") for i in range(len(info))]
    head = [int(row[1]) for row in rows]
    body = [row[5].date() for row in rows]
    # match = [{head[i]: body[i]} for i in range(len(info))]

    app.layout = html.Div([html.H1(style={"textAlign": "center", "background": "black", "color": "skyblue"},
                children=["Expenses",
                            dcc.Graph(id="Expense",
                                    figure={
                                        "data": [
                                            go.Scatter(
                                                x=[i for i in body],
                                                y=[i for i in head],
                                                # text=[i for i in head],
                                                mode="lines+markers",
                                                opacity=0.7,
                                                marker={
                                                    "size": 15,
                                                    "line": {"width": 0.5, "color": "white"},
                                                },
                                                name=i
                                            ) for i in head
                                        ],
                                        "layout": go.Layout(
                                            plot_bgcolor="white",
                                            paper_bgcolor="white",
                                            xaxis={'type': 'log', 'title': 'Date', "color": "black"},
                                            yaxis={'title': 'Amount Spent', "color": "black"},
                                            margin={'l': 40, 'b': 40, 't': 10, 'r': 10},
                                            legend={'x': 0, 'y': 1},
                                            hovermode='closest',
                                            font={"color": "brown"}
                                        )
                                    }
                                    )
                            ])
                        ])
    


if __name__ == '__main__':
    #database connection
    connection = pymysql.connect(host="localhost",user="root",passwd="",database="xpensedb")
    # connection = pymysql.connect(host='localhost', 
    # unix_socket='/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock', 
    # user='root', 
    # passwd="", 
    # db='xpensedb')
    cursor = connection.cursor()

    # Initialize dash components
    external_stylesheets = ['https://codepen.io/chriddyp/pen/bWLwgP.css']
    app = dash.Dash(__name__, external_stylesheets=external_stylesheets)
    
    expenseStats(cursor, app, sys.argv[1])
    connection.commit()
    connection.close()
    app.run_server(debug=True)
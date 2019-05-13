#!/usr/bin/env python2
# # -*- coding: utf-8 -*-
import sys
import traceback
import argparse
import time
import datetime
import codecs
import requests
import json
from builtins import input

sys.path.append("zk")

from zk import ZK, const
from zk.user import User
from zk.finger import Finger
from zk.attendance import Attendance
from zk.exception import ZKErrorResponse, ZKNetworkError

class BasicException(Exception):
    pass

conn = None

parser = argparse.ArgumentParser(description='ZK Basic Reading Tests')
parser.add_argument('-a', '--address', 
                    help='ZK device Address [192.168.1.201]', default='192.168.1.201')
parser.add_argument('-p', '--port', type=int,
                    help='ZK device port [4370]', default=4370)
parser.add_argument('-T', '--timeout', type=int,
                    help='Default [10] seconds (0: disable timeout)', default=10)
parser.add_argument('-P', '--password', type=int,
                    help='Device code/password', default=0)
parser.add_argument('-b', '--basic', action="store_true",
                    help='get Basic Information only. (no bulk read, ie: users)')
parser.add_argument('-f', '--force-udp', action="store_true",
                    help='Force UDP communication')
parser.add_argument('-v', '--verbose', action="store_true",
                    help='Print debug information')
parser.add_argument('-t', '--templates', action="store_true",
                    help='Get templates / fingers (compare bulk and single read)')
parser.add_argument('-tr', '--templates-raw', action="store_true",
                    help='Get raw templates (dump templates)')
parser.add_argument('-ti', '--templates-index', type=int,
                    help='Get specific template', default=0)
parser.add_argument('-r', '--records', action="store_true",
                    help='Get attendance records')
parser.add_argument('-u', '--updatetime', action="store_true",
                    help='Update Date/Time')
parser.add_argument('-l', '--live-capture', action="store_true",
                    help='Live Event Capture')
parser.add_argument('-o', '--open-door', action="store_true",
                    help='Open door')
parser.add_argument('-D', '--deleteuser', type=int,
                    help='Delete a User (uid)', default=0)
parser.add_argument('-A', '--adduser', type=int,
                    help='Add a User (uid) (and enroll)', default=0)
parser.add_argument('-E', '--enrolluser', type=int,
                    help='Enroll a User (uid)', default=0)
parser.add_argument('-F', '--finger', type=int,
                    help='Finger for enroll (fid=0)', default=0)

args = parser.parse_args()

zk = ZK(args.address, port=args.port, timeout=args.timeout, password=args.password, force_udp=args.force_udp, verbose=args.verbose)
conn = zk.connect()
# live capture! (timeout at 10s)
for attendance in conn.live_capture():
	if attendance is None:
		# implement here timeout logic
		pass
	else:
		url = 'http://software.saintcosmoschool.com/api/student/attendance'
		headers = {
			"Connection": "keep-alive",
			"Accept": "application/json",
			"Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImYzN2Y3YjI4ZWM5MjBhYjg3ZTEwOWRhYjhmOTg3YmFiOWYxNTczMmRkMTY5MWExZWMzZWY3ZGVmNWU5OWEyNjc0NjM4YjMwYjQwY2Q5ZGE4In0.eyJhdWQiOiIyIiwianRpIjoiZjM3ZjdiMjhlYzkyMGFiODdlMTA5ZGFiOGY5ODdiYWI5ZjE1NzMyZGQxNjkxYTFlYzNlZjdkZWY1ZTk5YTI2NzQ2MzhiMzBiNDBjZDlkYTgiLCJpYXQiOjE1MjM0MjQ2NTYsIm5iZiI6MTUyMzQyNDY1NiwiZXhwIjoxNTU0OTYwNjU2LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.A2BS2b7jhJK_UOP8MJzvlkCvt5H4tRyYItTRlJfzm81rykSQ0SA7SMUiW2phE8muDgvYGKtJLR4MUJ9JOgSbzxbh_SgfEE7PRkTrWeU-xE0-2Bv8pOlSsGgTbHLd0bdeV5FICD3yNo4e12Nc4cKkXE0gSeppsSpw2RPWeF4nVYSOwbG3KV_Xl-tdEt1a6I-A9uPIy0sJbILPakXW8g50LIWo0i_DzCMRZemsl1a3f-G7HcEu5BnbGaflKi2u5e1lTo6tWGsKcnjOvdDrRwnM7laJcN45NVxYjrSB9vUhHTExw9r6TV7EVE-aBnKL_bXGpwjbv0h1rLaRfucZCwWGiLiBUS4CNCTpmJaqMTqMYWTQ4LFxmNhn7wfZXwTkDrpH91ObLdYpZmGyfO6NR3WMYeeONUTUNMkVX55VB5-8NhB7E4ild9R6BABjjVyysMaFpueyS7Yud3c6FJZ3VxyB8fPu6d0Kx85QBN5edYnWSjpSPkTz6Zh-pFCCoFQvAzOk21J7_FKhvxc0c2H532Wj1VPb9_bXmS79IHKAucTqI50SWR3LTKdZkv8WxPl8xFA8Q_366-Difu7B2yQX0NBQ5e426B3YZEmu_qPmwLyipgQBfHAc9MKBJWgg6iTZy-pxiaKwNAL7gX3qiyGLjlppWc9cg4kDySocbQ4sv7qrH2k",
			"Content-Type": "application/x-www-form-urlencoded"
		}
		metric_id = attendance.user_id
		r = requests.post(url=url, data = {'metric_id':metric_id}, headers=headers)
		print(r.json())
		print (attendance) # Attendance object
		#print (attendance.user_id) # Attendance object
	#
	#if you need to break gracefully just set
	#   conn.end_live_capture = True
	#
	# On interactive mode,
	# use Ctrl+C to break gracefully
	# this way it restores timeout
	# and disables live capture
if conn:
	print ('Enabling device ...')
	conn.enable_device()
	conn.disconnect()
	print ('ok bye!')
	print ('')

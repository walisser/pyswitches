import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)

pin=15
GPIO.setup(pin, GPIO.IN, pull_up_down = GPIO.PUD_DOWN)

if GPIO.input(pin) == 1:
	print 'Power is ON'
else:
	print 'Power is OFF'

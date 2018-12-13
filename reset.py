import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)

GPIO.setup(11, GPIO.OUT)

GPIO.output(11, 0)
time.sleep(1)
GPIO.output(11, 1)

print("reset complete")

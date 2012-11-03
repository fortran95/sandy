#!/usr/bin/env python
#-*- coding: utf-8 -*-
import os
import sys
import time

from _daemon import Daemon

class Sandy(Daemon):

    def run(self):
        while True:
            sys.stderr.write('hello, here is Sandy.')
            time.sleep(1)

if __name__ == '__main__':
    sandyd = Sandy('/tmp/sandy.pid',
                  )

    if len(sys.argv) >= 2:
        operation = sys.argv[1].lower()
        if 'start' == operation:
            sandyd.start()
        elif 'stop' == operation:
            sandyd.stop()
        elif 'restart' == operation:
            daemon.restart()
        else:
            print "Unknow command."
            sys.exit(2)
        sys.exit(0)
    else:
        print "Usage: %s start|stop|restart" % sys.argv[0]
        sys.exit(2)

import os
import re


d = os.listdir()
def wgetcommand(thumbname, code, quality):
    return("wget -O \"thumbs/{}\" https://i.ytimg.com/vi/{}/{}.jpg".format(thumbname,code,quality))

def nonyoutube(name):
    if "mkv" in name or "webm" in name or "mp4" in name:
        pass
        #replace this with a script to generate thumbnails from video itself

os.mkdir("thumbs")

for a in d:
    code = re.search(r".*([a-zA-Z0-9-_]{11})\.(mkv|webm|mp4)", a)
    try:
        print(code.group(1))
    except:
        nonyoutube(a)
        continue
    thumbname = a[:a.rfind(".")+1] + "jpg"

    os.system("{} || {} || {} || {} || {}".format(wgetcommand(thumbname,code.group(1),"maxresdefault"),
                                                  wgetcommand(thumbname,code.group(1),"sddefault"),
                                                  wgetcommand(thumbname,code.group(1),"hqdefault"),
                                                  wgetcommand(thumbname,code.group(1),"mqdefault"),
                                                  wgetcommand(thumbname,code.group(1),"default")))

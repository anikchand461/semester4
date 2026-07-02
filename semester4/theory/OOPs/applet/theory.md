## Applet

Applets are small Java program that are primarily used in internet computing. They can be transported over the internet from one computer to another and run using the Applet Viewer or any web browser that supports Java.
It can perform arithmetic operations, display graphics, play sounds, accept user input, create animation etc.
Java has enabled interactive multimedia web documents. A web page now contain not only a simple text or static image but also a java applet which can produce graphics, sounds and moving images. Java applets therefore have begun to make a significant impact on the WWW.

### Local and Remote Applet

An Applet developed locally and stored in a local system is known as local applet. When a web page is trying to find a local applet, it does not need to use internet and therefore the local system does not require the internet connection. It simply searches the directories in the local system and locates and loads the specified applets.

A remote applet is that which is developed by someone else and stored on a remote computer connected to the internet. If our system in connected to the internet, we can download the remote applet onto our system via the internet and run it. In order to load a remote applet, we must know the applet's address i.e. URL (uniform resource locator).

### Applets vs. Applications

1. Applet doesn't have main() method unlike Applications.
2. Unlike standalone applications, applets cannot run independently. It needs webpage using a special feature named html tag.
3. Applets cannot read from or write to a file on local system.
4. Applet cannot communicate with other servers on the network.
5. Applets cannot run a program from local computer.
6. Applets are restricted from using libraries from other languages like C/C++ etc. (But not that Java Supports the same using native methods.)

### Why we need applet ?

1. When we need to include something dynamic to included in our webpage.
2. When we require some flash output like applet to produce some sound, animations or some special effects when displaying some certain pages.
3. When we want to create a program and want it to make available on internet so that it could be used by others.

### Applet Life Cycle

Every Java applet has a life cycle throughout which is passes throughout his lifespan. Every java applet inherits the behaviour from the Applet class. Applet life contains the following states :

1. Born and Initialize state.
2. Running state
3. Idle state
4. Dead or destroyed state.

5. **Initialization State :**
   When an applet is loaded it enters the initialization state. This happens by calling the init() method of Applet class. The Applet is born. At this stage the following actions may be taken.

- Create object as required by the applet.
- set up initial values.
- load images and fonts.
- set up colors.

Initialization occurs only once in the applet's life cycle. To go with any of the above points we have to override init() method.

2. **Running State :** Applet enters the running state when the system calls the start() method of Applet Class. This occurs automatically after the applet is initiated.
   Suppose we leave the webpage containing the applet temporarily to another page and return back to the page. This again starts the applet running. Note that, unlike init() method, the start() method may be called more than once.

3. **Idle or Stopped state :** An applet becomes idle when it is stopped from running. Stopping occurs automatically when we leave the current webpage on which applet was running. We can do the same by calling stop() method.

4. **Dead state :** An Applet is said to be dead when it is removed from the memory, this occurs automatically by invoking the destroy() method when we quit the browser. Like initialization, destroying occurs only once in the applet's life cycle.

5. **Display state :** Whenever an applet has to perform some output operations, it enters Display state. This happens after an applet enters to the running state. The paint() method is called to accomplish this task.

### Writing Java Applet

To create an applet we follow the following steps:

1. Building an applet code. (.java file)
2. Creating an executable applet (.class)
3. designing a webpage with html tags.
4. preparing <APPLET> tag
5. incorporating <APPLET> tag into the webpage.
6. creating html file.
7. testing the applet code.

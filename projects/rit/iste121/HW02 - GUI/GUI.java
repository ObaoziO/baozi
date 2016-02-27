// Yuqing Guo
// Homework 02
// ISTE.121.01
// Instructor: Michael Floeser

import java.awt.*;
import javax.swing.*;
import java.awt.event.*;
import java.awt.Desktop;
import java.io.IOException;
import java.awt.EventQueue;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.net.URI;
import java.net.URISyntaxException;
import java.net.URL;

public class GUI extends JFrame implements ActionListener{
   
   int count = 0;
   int size = 100;
   
   JMenu jmWhat;
   JMenuItem jmiTop;
   JTextArea jtaCancel;
   
   
   JMenu jmNum;
      
   JMenuItem jmiOne;
   JMenuItem jmiThree;
   JMenuItem jmiFive;
   JMenuItem jmiSeven;
   JMenuItem jmiSix;
   JMenuItem jmiAll;
   
   
   JButton jbBye;
   JButton jbExit;
   JButton jbQuit;
   JButton jbLeave;
   JButton jbReset;
   JButton jbPlus;
   JButton jbMinus;
   
   JButton jb1;
   JButton jb2;
   JButton jb3;
   JButton jb4;
   
   JRadioButton jrb1;
   JLabel jlColor;
   JRadioButton jrbGreen;
   JRadioButton jrbYellow;
   JRadioButton jrbBlue;
   JRadioButton jrbRed;
   JRadioButton jrbOrange;
   JRadioButton jrbBlack;
   JRadioButton jrbWhite;
   JRadioButton jrbOther;
   ButtonGroup bgColors;
   
   ImageIcon image;
   ImageIcon image1;
   ImageIcon image2;
   ImageIcon image3;
   ImageIcon image4;
   ImageIcon image5;
   ImageIcon image6;
   ImageIcon image7;
   ImageIcon image8;
   ImageIcon image9;
   
   ImageIcon catImage1;
   ImageIcon catImage2;
   ImageIcon catImage3;
   ImageIcon catImage4;
   ImageIcon catImage5;
   ImageIcon catImage6;
   ImageIcon catImage7;
   ImageIcon catImage8;
   
   
   JButton jbDogSource;
   JLabel jlDogSource;
   JButton jbDogClose;
   
   JButton jbCatSource;
   JLabel jlCatSource;
   JButton jbCatClose;
   
   JTextArea jtaQuit;
   
   JTextArea jtaColor;
   JTextArea jtaCatDog;
   
   JCheckBox jcbDogI; //JCheckBox dog image link
   JCheckBox jcbCatAndDogI; //JCheckBox cat and dog image link
   JCheckBox jcbCatI; //JCheckBox cat image link
   JCheckBox jcbDogS; //JCheckBox dog image site link
   JCheckBox jcbCatAndDogS; //JCheckBox cat and dog image link
   JCheckBox jcbCatS; //JCheckBox cat image link
   
   JButton jbGoTo; 
   
   
   public static void main(String [] args){
      new GUI();
   
   }// end main method
   
   public GUI()
   {
      setTitle("Cat and Dog");
   //Title area:
      JMenuBar jmbTop = new JMenuBar();
      jmWhat = new JMenu("What is this??");
      jmiTop = new JMenuItem("Not sure...");
      jbBye = new JButton("Bye~");
      
      jmiTop.addActionListener(this);
      jbBye.addActionListener(this);
   
      jmWhat.add(jmiTop);
      jmWhat.add(jbBye);
   
      jmbTop.add(jmWhat);
      add(jmbTop);
   
      setJMenuBar(jmbTop);
   
   
   //North
      JPanel jpNorth = new JPanel();
      jbQuit = new JButton("Quit");
      jbQuit.addActionListener( this );
   
      jpNorth.add(jbQuit);
      add(jpNorth, BorderLayout.NORTH);
   
   
   //South:
      JPanel jpSouth = new JPanel();
      jbExit = new JButton("Exit");
      jbLeave = new JButton("Leave");
   
      jbExit.addActionListener( this );
      jbLeave.addActionListener( this );
   
      jpSouth.add(jbExit);
      jpSouth.add(jbLeave);
   
      add(jpSouth, BorderLayout.SOUTH);
   
   
   //West:
      JPanel jpLeft = new JPanel();
      jpLeft.setLayout(new GridLayout(4,0));
      
      //create new buttons
      jb1 = new JButton("1.Click here");
      jb2 = new JButton("2.Click here");
      
      //create and wrap text field
      jtaColor = new JTextArea();
      jtaColor = new JTextArea("1.Click here to choose a color.");
      jtaColor.setEditable(false);
      jtaColor.setLineWrap(true);
      jtaColor.setWrapStyleWord(true);
      jtaCatDog = new JTextArea("2.Click here for images of a dog and a cat. One of each.");
      jtaCatDog.setEditable(false);
      jtaCatDog.setLineWrap(true);
      jtaCatDog.setWrapStyleWord(true);
      
      jb1.addActionListener( this );
      jb2.addActionListener( this );
      
      jpLeft.add(jb1);
      jpLeft.add(jtaColor);
      jpLeft.add(jb2);
      jpLeft.add(jtaCatDog);
   
      add(jpLeft, BorderLayout.WEST);
   
   
   //East:
      JPanel jpRight = new JPanel();
      
      jb3 = new JButton("3.Click for a Dog");
      jb4 = new JButton("4.Click for a Cat");
      
      jb3.addActionListener( this );
      jb4.addActionListener( this );
   
      jpRight.add(jb3);
      jpRight.add(jb4);
   
      add(jpRight, BorderLayout.EAST);
   
   
   //Center:
      JMenu jmNum;
   
      JPanel jpCenter = new JPanel(new GridLayout(2,2));
      JMenuBar jmbCenter = new JMenuBar();
      
      //create JMenu and JMenuItems
      jmNum = new JMenu("Choose a Number!");
      
      jmiOne = new JMenuItem("One: 1");
      jmiThree = new JMenuItem("Three: 3");
      jmiFive = new JMenuItem("Five: 5");
      jmiSeven = new JMenuItem("Seven: 7");
      jmiSix = new JMenuItem("Six: 6");
      jmiAll = new JMenuItem("ALL: ");
      
      
      //add to ActionListener
      jmNum.addActionListener( this);
      jmiOne.addActionListener( this);
      jmiThree.addActionListener( this);
      jmiFive.addActionListener( this);
      jmiSeven.addActionListener( this);
      jmiSix.addActionListener( this);
      jmiAll.addActionListener( this);
      
      
      //add to JMenu
      jmNum.add(jmiOne);
      jmNum.add(jmiThree);
      jmNum.add(jmiFive);
      jmNum.add(jmiSeven);
      jmNum.add(jmiSix);
      jmNum.add(jmiAll);
      
      //add to JMenuBar
      jmbCenter.add(jmNum);
      
      jtaCancel = new JTextArea("Fill this out first.");
      jtaCancel.setEditable(false);
      
      image = new ImageIcon("catAndDog.gif");
      JLabel jlPicCatAndDog = new JLabel(new ImageIcon("" + "catAndDog" + ".gif"));
      JLabel jlPicCatAndDog2 = new JLabel(new ImageIcon("" + "catAndDog" + ".gif"));
      
      jpCenter.add(jlPicCatAndDog);
      jpCenter.add(jmbCenter);
      jpCenter.add(jlPicCatAndDog2);
      jpCenter.add(jtaCancel);
      add(jpCenter, BorderLayout.CENTER);
      
      //can add another control: addWindowListener --- windowAdapter
      addWindowListener( 
            new WindowAdapter() {
            
               public void windowClosing(WindowEvent windowEvent){
                  JOptionPane.showMessageDialog(null,"Exiting...");
                  JOptionPane.showMessageDialog(null,"...but it's too sad to see you go... :(");
                  System.out.println("Exiting... Good Bye!\n...no... Don't go yet...\n");
                  // System.exit(0); 
               }
            });
      
      
      
      //set size, location, visible...
      setSize(800,550);//original size of GUI
      setLocationRelativeTo(null);
      setDefaultCloseOperation(DO_NOTHING_ON_CLOSE);
      setVisible(true);
   }//end GUI method



   public void actionPerformed(ActionEvent ae)
   {
      ae.getSource();
      ae.getActionCommand();
      
      // "Not sure...": click for more information >> telling user to look around the program more
      if (ae.getSource() == jmiTop){
         JOptionPane.showMessageDialog(null, "Try looking around a little.");
         JOptionPane.showMessageDialog(null, "Just don't get trapped...");
         JOptionPane.showMessageDialog(null, "Have fun!");
         System.out.println("WARNING: Be careful of the traps...");
      }//end jmiTop "Not sure..."
      
      
      //"Bye~" button command
      else if(ae.getActionCommand() == "Bye~"){
         JOptionPane.showMessageDialog(null, "Hi");
         System.out.println("You clicked \"Bye~\". Why bye...?");
      }
      //"Quit" button command   
      else if(ae.getActionCommand() == "Quit"){
         JOptionPane.showMessageDialog(null,"You");
         JOptionPane.showMessageDialog(null,"have");
         JOptionPane.showMessageDialog(null,"to");
         JOptionPane.showMessageDialog(null,"look");
         JOptionPane.showMessageDialog(null,"around");
         JOptionPane.showMessageDialog(null,"a");
         JOptionPane.showMessageDialog(null,"little");
         JOptionPane.showMessageDialog(null,"more");
         JOptionPane.showMessageDialog(null,".");
         setSize(900,900);
      }//end "Bye~"
      
      
      //JMenuItems command: numbers
      else if (ae.getSource() == jmiOne){
         JOptionPane.showMessageDialog(null,"1");
      }
      else if (ae.getSource() == jmiThree){
         JOptionPane.showMessageDialog(null,"3");
      }
      else if (ae.getSource() == jmiFive){
         JOptionPane.showMessageDialog(null,"5");
      }
      else if (ae.getSource() == jmiSeven){
         JOptionPane.showMessageDialog(null,"7");
      }
      else if (ae.getSource() == jmiSix){
         JOptionPane.showMessageDialog(null,"6");
      }
      else if (ae.getSource() == jmiAll){
         JOptionPane.showMessageDialog(null,"A, B, C, D, E,...");
         JOptionPane.showMessageDialog(null,"8");
         JOptionPane.showMessageDialog(null,"2");
         JOptionPane.showMessageDialog(null,"4");
         JOptionPane.showMessageDialog(null,"0");
         JOptionPane.showMessageDialog(null,"9");
         JOptionPane.showMessageDialog(null,"That's ALL the Numbers I Know~!!");
         JOptionPane.showMessageDialog(null,"0\n1\n2\n3\n4\n5\n6\n7\n8\n9");
         JOptionPane.showMessageDialog(null,"F, G, H, I, J.");
         JOptionPane.showMessageDialog(null,"ALL Ten Numbers.");
         JOptionPane.showMessageDialog(null,"Wait...");
         JOptionPane.showMessageDialog(null,"Nine #'s...??");
      }
      
      
      
      //Exit Button Command
      else if(ae.getActionCommand() == "Exit"){
         count=0;
         do{
            if(true){
               JOptionPane.showMessageDialog(null,"Are you sure?", "Exit?",JOptionPane.QUESTION_MESSAGE);
               count++;
               size+=50;
            }
            setSize((size*5),(size*20));
         }while(count<3);
         JOptionPane.showMessageDialog(null,"Are you REALLY sure?", "Exit?",JOptionPane.QUESTION_MESSAGE);
         setSize((10),(50));
         setLocationRelativeTo(null);
         JOptionPane.showMessageDialog(null,"Try the RIGHT button...", "Exit? - Try Again",JOptionPane.QUESTION_MESSAGE);
         System.out.println("Exiting...");
         System.out.println("Nah...");
      }// end "Exit"
      
      
      //Leave button command: the only button/way to exit the program
      else if(ae.getActionCommand() == "Leave"){
         count=0;
         do{
            if(true){
               count++;
               JOptionPane.showMessageDialog(null,"Why.. Don't go...");
               JOptionPane.showMessageDialog(null,"But...");
               size+=50;
            }
            setSize((size*5),(size*10));
         }while(count < 10);//close on 21st click of JOptionPane; 22nd including the Leave button
         
         setSize(800,550);//resize to original 
         
         JOptionPane.showMessageDialog(null, "Okay... Bye!");
         System.out.println("You've successfully EXITED on the 22nd click, inluding the Leave button.");
         System.out.println("Good Bye... See you next time!");
         System.out.println("Leaving...");
         System.exit(2); 
      }//end "Leave"
      
      
      //Creating choosing colors command
      else if(ae.getSource() == jb1){
         JWindow jw1 = new JWindow();
         JPanel jpTitle = new JPanel();
         jlColor = new JLabel("Choose a color");
         jpTitle.add(jlColor);
         
         JPanel jpColor = new JPanel(new GridLayout(4,4));
         
         jrbGreen = new JRadioButton("Green");
         jrbYellow = new JRadioButton("Yellow");
         jrbBlue = new JRadioButton("Blue");
         jrbRed = new JRadioButton("Red");
         jrbOrange = new JRadioButton("Orange");
         jrbBlack = new JRadioButton("Black");
         jrbWhite = new JRadioButton("White");
         jrbOther = new JRadioButton("Other");
         
         
         //set color of the JRadioButton text
         jrbGreen.setForeground( new Color( 0x339900 ) );
         jrbYellow.setForeground( new Color( 0xFFFF00 ) );
         jrbBlue.setForeground( new Color( 0x66CCFF ) );
         jrbRed.setForeground( new Color( 0xFF0033 ) );
         jrbOrange.setForeground( new Color( 0xFF9900 ) );
         jrbBlack.setForeground( new Color( 0x000000 ) );
         jrbWhite.setForeground( new Color( 0xFFFFFF ) );
         jrbOther.setForeground( new Color( 0x996633 ) );
      
      
         if(ae.getSource() == jrbOther){
            JOptionPane.showMessageDialog(null,"Sorry, that's all we have..");
         }
         
         //Create button group
         bgColors = new ButtonGroup();
         
         bgColors.add(jrbGreen);
         bgColors.add(jrbYellow);
         bgColors.add(jrbBlue);
         bgColors.add(jrbRed);
         bgColors.add(jrbOrange);
         bgColors.add(jrbBlack);
         bgColors.add(jrbWhite);
         bgColors.add(jrbOther);
         
         //add to JPanel jpColor
         jpColor.add(jrbGreen);
         jpColor.add(jrbYellow);
         jpColor.add(jrbBlue);
         jpColor.add(jrbRed);
         jpColor.add(jrbOrange);
         jpColor.add(jrbBlack);
         jpColor.add(jrbWhite);
         jpColor.add(jrbOther);
         
         //add to ActionListener
         jrbGreen.addActionListener( this );
         jrbYellow.addActionListener( this );
         jrbBlue.addActionListener( this );
         jrbRed.addActionListener( this );
         jrbOrange.addActionListener( this );
         jrbBlack.addActionListener( this );
         jrbWhite.addActionListener( this );
         jrbOther.addActionListener( this );
         
         //add to JWindow
         jw1.add(jpTitle, BorderLayout.NORTH);
         jw1.add(jpColor, BorderLayout.CENTER);
         
         jw1.setSize(500,150);
         jw1.setLocation(100,20);
         jw1.setVisible(true);
      
      // new JFrame
         JFrame jf1 = new JFrame("Hi! Here's the links to the images:");
         
         //North
         JPanel jpSourceN = new JPanel(); // JPanel North
         JLabel jlSourceTitle = new JLabel("Click for Image (Source):", JLabel.CENTER);
         
         jpSourceN.add(jlSourceTitle);
         
         //Center: JLabel and JCheckBoxes
         JPanel jpSourceC = new JPanel( ); // JPanel Center
         
         jcbDogI = new JCheckBox("Dog"); //JCheckBox dog image link
         jcbCatAndDogI = new JCheckBox("Cat and Dog"); //JCheckBox cat and dog image link
         jcbCatI = new JCheckBox("Cat"); //JCheckBox cat image link
         
         /*
         JLabel jlDogSjf1 = new JLabel("Dog:"); // JLabel dog source created in jf1 JFrame 
         JLabel jlCatAndDogSjf1 = new JLabel("Cat and Dog:"); // JLabel cat and dog source created in jf1 JFrame 
         JLabel jlCatSjf1 = new JLabel("Cat:"); // JLabel cat source created in jf1 JFrame 
         
         jcbDogS = new JCheckBox(); //JCheckBox dog image site link
         jcbCatAndDogS = new JCheckBox(); //JCheckBox cat and dog image link
         jcbCatS = new JCheckBox(); //JCheckBox cat image link
         */ 
         
      // add to jpSourceC JPanel
         // jpSourceC.add(jlDogSjf1);
         jpSourceC.add(jcbDogI);
         // jpSourceC.add(jcbDogS);
         
         // jpSourceC.add(jlCatAndDogSjf1);
         jpSourceC.add(jcbCatAndDogI);
         // jpSourceC.add(jcbCatAndDogS);
         
         // jpSourceC.add(jlCatSjf1);
         jpSourceC.add(jcbCatI);
         // jpSourceC.add(jcbCatS);
         
         //South: JButtons >> not needed after taken out the JCheckBoxes for site links
         JPanel jpSourceS = new JPanel(); // JPanel South
         jbGoTo = new JButton("Go To");
         jbGoTo.addActionListener(this);
         jpSourceS.add(jbGoTo);
         
         // add each JPanel to the jft1 JFrame
         jf1.add(jpSourceN, BorderLayout.NORTH);
         jf1.add(jpSourceC, BorderLayout.CENTER);
         jf1.add(jpSourceS, BorderLayout.SOUTH);
         
         //add to ActionListener
         jcbDogI.addActionListener(this);
         jcbCatAndDogI.addActionListener(this);
         jcbCatI.addActionListener(this);
         // jcbDogS.addActionListener(this);
         // jcbCatAndDogS.addActionListener(this);
         // jcbCatS.addActionListener(this);
         
         //set size, location, visible
         jf1.setSize(500,150);
         jf1.setLocation(700,10);		
         jf1.setVisible(true);
      }//end jb1
      
      
      
      //check box: link to image and image site
      else if(ae.getSource() == jcbDogI){
         goWebsiteDogI();
      }
      /*else if(ae.getSource() == jcbDogS){
         goWebsiteDogS();
      }*/
      else if(ae.getSource() == jcbCatAndDogI){
         goWebsiteCatAndDogI();
      }
      /*else if(ae.getSource() == jcbCatAndDogS){
         goWebsiteCatAndDogS();
      }*/
      else if(ae.getSource() == jcbCatI){
         goWebsiteCatI();
      }
      /*else if(ae.getSource() == jcbCatS){
         goWebsiteCatS();
      }*/
      
      
      //Go To button
      else if(ae.getSource() == jbGoTo){
         JOptionPane.showMessageDialog(null,"Just click on the checkboxes please.");
         JOptionPane.showMessageDialog(null,"It will open the image in your browser.");
      }
      
      
      
      //Color Button Commands: shows up semi-random message dialogues
      else if(ae.getSource() == jrbGreen)
      {
         JOptionPane.showMessageDialog(null,"You want \"Green\"."+"\n"+"Are you SURE???");
         JOptionPane.showMessageDialog(null,"Yeah.. Okay.");
      }
      else if(ae.getSource() == jrbYellow)
      {
         JOptionPane.showMessageDialog(null,"You want \"Yellow\"."+"\n"+"Are you SURE???");
         JOptionPane.showMessageDialog(null,"Yellow! Like the SUN.");
      }
      else if(ae.getSource() == jrbBlue)
      {
         JOptionPane.showMessageDialog(null,"You want \"Blue\"."+"\n"+"Are you SURE???");
         JOptionPane.showMessageDialog(null,"What can you think of?\nSky...");//1
         JOptionPane.showMessageDialog(null,"What can you think of?\nOcean...");//2
         JOptionPane.showMessageDialog(null,"What can you think of?\nWAter");//3
         JOptionPane.showMessageDialog(null,"What can you think of?\nwaTer");//4
         JOptionPane.showMessageDialog(null,"What can you think of?\nwatER");//5
      }
      else if(ae.getSource() == jrbRed)
      {
         JOptionPane.showMessageDialog(null,"You want \"Red\"."+"\n"+"Are you SURE???");
         JOptionPane.showMessageDialog(null,"How about try something else...");
         JOptionPane.showMessageDialog(null,"5");
         JOptionPane.showMessageDialog(null,"3");
         JOptionPane.showMessageDialog(null,"2");
         JOptionPane.showMessageDialog(null,"7");
         JOptionPane.showMessageDialog(null,"!");
      }
      else if(ae.getSource() == jrbOrange)
      {
         JOptionPane.showMessageDialog(null,"You want \"Orange\"."+"\n"+"Are you SURE???");
         JOptionPane.showMessageDialog(null,"I don't really want an orange.");
      }
      else if(ae.getSource() == jrbBlack)
      {
         JOptionPane.showMessageDialog(null,"You want \"Black\"."+"\n"+"Are you SURE???");
         JOptionPane.showMessageDialog(null,"The cold dark night.");
         JOptionPane.showMessageDialog(null,"How about try something else...");
      }
      else if(ae.getSource() == jrbWhite)
      {
         JOptionPane.showMessageDialog(null,"You want \"White\"."+"\n"+"Are you SURE???");
         JOptionPane.showMessageDialog(null,"Are you SURE???");
         JOptionPane.showMessageDialog(null,"If you say so...");
         JOptionPane.showMessageDialog(null,"There's nothing to do now...");
         JOptionPane.showMessageDialog(null,"");
         JOptionPane.showMessageDialog(null,"SEE..");
      }
      else if(ae.getSource() == jrbOther)
      {
         JOptionPane.showMessageDialog(null,"You want \"Other\"."+"\n"+"Sorry, we don't have Other colors.");
         JOptionPane.showMessageDialog(null,"Sorry, we STILL don't have Other colors.");
      }
      
      //Images of a cat and a dog: one of each
      else if(ae.getSource() == jb2){
         Frame fDog1 = new Frame("Image of a Dog:");
         image1 = new ImageIcon("dog.gif");
         JLabel jlPicDog1 = new JLabel(new ImageIcon("" + "dog" + ".gif"));
         fDog1.add(jlPicDog1, BorderLayout.CENTER);
         fDog1.setSize(500,600);
         fDog1.setLocation(100,180);
         fDog1.setVisible(true);
         
         
         Frame fCat2 = new Frame("Image of a Cat:");
         image1 = new ImageIcon("dog.gif");
         JLabel jlPicCat9 = new JLabel(new ImageIcon("" + "cat" + ".gif"));
         fCat2.add(jlPicCat9, BorderLayout.CENTER);
         fCat2.setSize(500,600);
         fCat2.setLocation(700,180);
         fCat2.setVisible(true);
      }//end jb2
      
      
      //Click for a Dog: 8 windows of a dog's image will show up with a Close button on one of them
      else if(ae.getActionCommand() == "3.Click for a Dog"){
      
         System.out.println("You Clicked for a Dog!");
         System.out.println("Here is the Dog.");
      
      //new Frame
         Frame fDog2= new Frame("You Clicked for a Dog!");
         JPanel jpDog1 = new JPanel();
         image2 = new ImageIcon("dog.gif");
         JLabel jlPicDog2 = new JLabel(new ImageIcon("" + "dog" + ".gif"));
         jbDogSource = new JButton();
         jbDogSource.setText("<html> Source : <a href=http://blogimg.ngfiles.com/678000/678271/128013903_dog.gif\"\">Link</a></html>");
        
            
       //Close button in onw of the dog image windows
         jbDogClose = new JButton("More");
         
        //add JButton to ActionListener
         jbDogSource.addActionListener(this);
         jbDogClose.addActionListener(this);
         
         //add to JPanel jpDog1
         jpDog1.add(jbDogSource);
         jpDog1.add(jlPicDog2);
         jpDog1.add(jbDogClose);
         
         fDog2.add(jpDog1, BorderLayout.CENTER);
         fDog2.setSize(500,600);
         fDog2.setLocation(10,50);
         fDog2.setVisible(true);
         
         
      //new JWindow
         JWindow jwDog1 = new JWindow();
         image3 = new ImageIcon("dog.gif");
         JLabel jlPicDog3 = new JLabel(new ImageIcon("" + "dog" + ".gif"));
         jwDog1.add(jlPicDog3, BorderLayout.CENTER);
         jwDog1.setSize(50,50);
         jwDog1.setLocation(50,700);		
         jwDog1.setVisible(true);
         
         
      //new JWindow
         JWindow jwDog2 = new JWindow();
         image4 = new ImageIcon("dog.gif");
         JLabel jlPicDog4 = new JLabel(new ImageIcon("" + "dog" + ".gif"));
         jwDog2.add(jlPicDog4, BorderLayout.CENTER);
         jwDog2.setSize(100,300);
         jwDog2.setLocation(200,400);		
         jwDog2.setVisible(true);
         
         
      //new JWindow
         JWindow jwDog3 = new JWindow();
         image5 = new ImageIcon("dog.gif");
         JLabel jlPicDog5 = new JLabel(new ImageIcon("" + "dog" + ".gif"));
         jwDog3.add(jlPicDog5, BorderLayout.CENTER);
         jwDog3.setSize(200,200);
         jwDog3.setLocation(400,600);		
         jwDog3.setVisible(true);
         
         
      //new JWindow
         JWindow jwDog4 = new JWindow();
         image6 = new ImageIcon("dog.gif");
         JLabel jlPicDog6 = new JLabel(new ImageIcon("" + "dog" + ".gif"));
         jwDog4.add(jlPicDog6, BorderLayout.CENTER);
         jwDog4.setSize(500,500);
         jwDog4.setLocation(700,400);		
         jwDog4.setVisible(true);
         
         
      //new JWindow
         JWindow jwDog5 = new JWindow();
         image7 = new ImageIcon("dog.gif");
         JLabel jlPicDog7 = new JLabel(new ImageIcon("" + "dog" + ".gif"));
         jwDog5.add(jlPicDog7, BorderLayout.CENTER);
         jwDog5.setSize(700,100);
         jwDog5.setLocation(700,50);		
         jwDog5.setVisible(true);
         
         
      //new JWindow
         JWindow jwDog6 = new JWindow();
         image8 = new ImageIcon("dog.gif");
         JLabel jlPicDog8 = new JLabel(new ImageIcon("" + "dog" + ".gif"));
         jwDog6.add(jlPicDog8, BorderLayout.CENTER);
         jwDog6.setSize(450,300);
         jwDog6.setLocation(600,100);		
         jwDog6.setVisible(true);
         
         
      //new JWindow
         JWindow jwDog7 = new JWindow();
         image9 = new ImageIcon("dog.gif");
         JLabel jlPicDog9 = new JLabel(new ImageIcon("" + "dog" + ".gif"));
         jwDog7.add(jlPicDog9, BorderLayout.CENTER);
         jwDog7.setSize(250,300);
         jwDog7.setLocation(900,500);		
         jwDog7.setVisible(true);
      
      }//end jb3 - 3.Click for a Dog
      
      //Click on the link button on the Frame window of dog picture leads to the image link
      else if (ae.getSource() == jbDogSource ){
         goWebsiteDogI();
      }
      
      
      //Dog image: easy exit>> just in case so the computer wont't freeze up
      else if(ae.getSource() == jbDogClose){
         JOptionPane.showMessageDialog(null,"Are you sure?", "Close?",JOptionPane.QUESTION_MESSAGE);
         JOptionPane.showMessageDialog(null,"Are you REALLY sure?", "Close?",JOptionPane.QUESTION_MESSAGE);
         JOptionPane.showMessageDialog(null,"Just kidding, you can Leave here too..", "Close? - Success!",JOptionPane.QUESTION_MESSAGE);
         JOptionPane.showMessageDialog(null,"Bye! :D", "Exit? - Success!",JOptionPane.QUESTION_MESSAGE);
         System.out.println("Closing...");
         System.exit(0);//close the program on the 4th click, 5th counting the "More" button
      }// end jbDogClose
      
      
      //Click for a Cat: 8 windows of a cat's image will show up with a Close button on one of them
      else if(ae.getActionCommand() == "4.Click for a Cat"){
      
         System.out.println("You Clicked for a Cat!");
         System.out.println("Here is the Cat.");
      
         //new Frame
         Frame fCat1= new Frame("You Clicked for a Cat!");
         JPanel jpCat1 = new JPanel();
         catImage1 = new ImageIcon("cat.gif");
         JLabel jlPicCat1 = new JLabel(new ImageIcon("" + "cat" + ".gif"));
         jbCatSource = new JButton();
         jbCatSource.setText("<html> Source : <a href=http://kixen.newgrounds.com/news/post/678271/\"\">Link</a></html>");
      
       //Close button: on one of the cat image windows
         jbCatClose = new JButton("More");  
                 
       //add JButton to ActionListener
         jbCatSource.addActionListener(this);
         jbCatClose.addActionListener(this);
         
       //add to JPanel jpCat1  
         jpCat1.add(jbCatSource);
         jpCat1.add(jlPicCat1);
         jpCat1.add(jbCatClose);
         
         fCat1.add(jpCat1, BorderLayout.CENTER);
         fCat1.setSize(500,400);
         fCat1.setLocation(800,50);
         fCat1.setVisible(true);
         
         
       //new JWindow
         JWindow jwCat1 = new JWindow();
         catImage2 = new ImageIcon("cat.gif");
         JLabel jlPicCat2 = new JLabel(new ImageIcon("" + "cat" + ".gif"));
         jwCat1.add(jlPicCat2, BorderLayout.CENTER);
         jwCat1.setSize(50,50);
         jwCat1.setLocation(800,600);		
         jwCat1.setVisible(true);
         
       //new JWindow
         JWindow jwCat2 = new JWindow();
         catImage3 = new ImageIcon("cat.gif");
         JLabel jlPicCat3 = new JLabel(new ImageIcon("" + "cat" + ".gif"));
         jwCat2.add(jlPicCat3, BorderLayout.CENTER);
         jwCat2.setSize(100,300);
         jwCat2.setLocation(100,200);		
         jwCat2.setVisible(true);
         
       //new JWindow
         JWindow jwCat3 = new JWindow();
         catImage4 = new ImageIcon("cat.gif");
         JLabel jlPicCat4 = new JLabel(new ImageIcon("" + "cat" + ".gif"));
         jwCat3.add(jlPicCat4, BorderLayout.CENTER);
         jwCat3.setSize(200,80);
         jwCat3.setLocation(600,460);		
         jwCat3.setVisible(true);
         
       //new JWindow
         JWindow jwCat4 = new JWindow();
         catImage5 = new ImageIcon("cat.gif");
         JLabel jlPicCat5 = new JLabel(new ImageIcon("" + "cat" + ".gif"));
         jwCat4.add(jlPicCat5, BorderLayout.CENTER);
         jwCat4.setSize(500,300);
         jwCat4.setLocation(0,430);		
         jwCat4.setVisible(true);
         
       //new JWindow
         JWindow jwCat5 = new JWindow();
         catImage6 = new ImageIcon("cat.gif");
         JLabel jlPicCat6 = new JLabel(new ImageIcon("" + "cat" + ".gif"));
         jwCat5.add(jlPicCat6, BorderLayout.CENTER);
         jwCat5.setSize(500,100);
         jwCat5.setLocation(400,0);		
         jwCat5.setVisible(true);
         
       //new JWindow
         JWindow jwCat6 = new JWindow();
         catImage7 = new ImageIcon("cat.gif");
         JLabel jlPicCat7 = new JLabel(new ImageIcon("" + "cat" + ".gif"));
         jwCat6.add(jlPicCat7, BorderLayout.CENTER);
         jwCat6.setSize(400,200);
         jwCat6.setLocation(200,500);		
         jwCat6.setVisible(true);
         
       //new JWindow
         JWindow jwCat7 = new JWindow();
         catImage8 = new ImageIcon("cat.gif");
         JLabel jlPicCat8 = new JLabel(new ImageIcon("" + "cat" + ".gif"));
         jwCat7.add(jlPicCat8, BorderLayout.CENTER);
         jwCat7.setSize(250,300);
         jwCat7.setLocation(50,20);		
         jwCat7.setVisible(true);
      
      }//end jb4 - 4.Click for a Cat
      
      
      //Cat image: easy exit>> just in case so the computer wont't freeze up
      else if(ae.getSource() == jbCatClose){
         JOptionPane.showMessageDialog(null,"Are you sure?", "Close?",JOptionPane.QUESTION_MESSAGE);
         JOptionPane.showMessageDialog(null,"Are you REALLY sure?", "Close?",JOptionPane.QUESTION_MESSAGE);
         JOptionPane.showMessageDialog(null,"Just kidding, you can Leave here too..", "Close? - Success!",JOptionPane.QUESTION_MESSAGE);
         JOptionPane.showMessageDialog(null,"Bye! :D", "Exit? - Success!",JOptionPane.QUESTION_MESSAGE);
         System.out.println("Closing...");
         System.exit(0);//close the program on the 4th click, 5th counting the "More" button
      }// end jbCatClose
   
   }
   
   
 // links to the dog image source:
 
   //Dog image site link 
   private void goWebsiteDogS() {
      
      try {
         Desktop.getDesktop().browse(new URI("http://kixen.newgrounds.com/news/post/678271"));
      } 
      catch (URISyntaxException | IOException ex) {
         System.out.println("It looks like there's a problem...");
      }
   }//end Dog image site link
   
   //Dog image link
   private void goWebsiteDogI() {
      
      try {
         Desktop.getDesktop().browse(new URI("http://blogimg.ngfiles.com/678000/678271/128013903_dog.gif"));
      } 
      catch (URISyntaxException | IOException ex) {
         System.out.println("It looks like there's a problem...");
      }
   }//end Dog image link
   
   
   //Cat and Dog image site link
   private void goWebsiteCatAndDogS() {
      
      try {
         Desktop.getDesktop().browse(new URI("http://camerasgoclick.tumblr.com"));
      } 
      catch (URISyntaxException | IOException ex) {
         System.out.println("It looks like there's a problem...");
      }
   }//end Cat and Dog image site link
   
   
   //Cat and Dog image link
   private void goWebsiteCatAndDogI() {
      
      try {
         Desktop.getDesktop().browse(new URI("http://31.media.tumblr.com/tumblr_m33vf7mmUR1qkuelqo3_250.gif"));
      } 
      catch (URISyntaxException | IOException ex) {
         System.out.println("It looks like there's a problem...");
      }
   }//end Cat and Dog image link
   
   
   //Cat image site link
   private void goWebsiteCatS() {
      
      try {
         Desktop.getDesktop().browse(new URI("http://giphy.com/search/cat"));
      } 
      catch (URISyntaxException | IOException ex) {
         System.out.println("It looks like there's a problem...");
      }
   }//end Cat image site link
   
   
   //Cat and Dog image link
   private void goWebsiteCatI() {
      
      try {
         Desktop.getDesktop().browse(new URI("http://media2.giphy.com/media/kIkwipWRoqeUE/giphy.gif"));
      } 
      catch (URISyntaxException | IOException ex) {
         System.out.println("It looks like there's a problem...");
      }
   }//end Cat image link
               
    
}// end class GUI
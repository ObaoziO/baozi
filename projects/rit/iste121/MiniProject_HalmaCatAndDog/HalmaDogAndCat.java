// Yuqing Guo and Katherine Lin
// ISTE.121.01
// Instructor: Michael Floeser
// Mini Project: Halma

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class HalmaDogAndCat extends JFrame implements ActionListener{
    
   public MyJButton[][] bAry = new MyJButton[8][8]; // button array 2D
   public Icon puppyDog = new ImageIcon("puppyDog.png");
   public Icon catBread = new ImageIcon("catBread.png");
   
   public JMenu jmMenu;
   public JMenuItem jmiRules;
   public JMenuItem jmiReset;
   
   public int sourceX;
   public int sourceY;
   public int desX;
   public int desY;
   public boolean firstMove = true;
   public boolean whosTurn = true;
   

   public static void main(String [] args){
      new HalmaDogAndCat();
   
   } // end main method
   
   
   public HalmaDogAndCat(){
   
   // Create JPanel: 8 by 8 GridLayout 
      JPanel jpBoard = new JPanel(new GridLayout(8,8));
      
   
   // Create JMenu
      JMenuBar jmbTop = new JMenuBar();
      jmMenu = new JMenu("Menu");
      jmiRules = new JMenuItem("Rules");
      jmiReset = new JMenuItem("Reset Game");
      
      jmiRules.addActionListener(this);
      jmiReset.addActionListener(this);
      
      jmMenu.add(jmiRules);
      jmMenu.add(jmiReset);
      jmbTop.add(jmMenu);
      
      setJMenuBar(jmbTop);
      
   
   // Create JButton
      for(int i = 0; i<8; i++){
         for(int h = 0; h<8; h++){
            
            if (i<(4-h)){ // adding puppyDog images
               bAry[i][h] = new MyJButton(i, h, 1);
               bAry[i][h].addActionListener(this);
               jpBoard.add(bAry[i][h]);
               
            }
            else if(i>(10-h)){ // adding catBread images
               bAry[i][h] = new MyJButton(i, h, 2);
               bAry[i][h].addActionListener(this);
               jpBoard.add(bAry[i][h]);
            }
            else{
               bAry[i][h] = new MyJButton(i, h, 0);
               bAry[i][h].addActionListener(this);
               jpBoard.add(bAry[i][h]);
            }
            
         } // end inner for
      } // end for
   
   
   // Add to JPanel & JFrame
      add(jpBoard);
      
      addWindowListener( 
            new WindowAdapter() {
               public void windowClosing(WindowEvent windowEvent){
                  JOptionPane.showMessageDialog(null,"Thank you for playing the game.","Exiting...",
                                                JOptionPane.INFORMATION_MESSAGE,puppyDog);
                  System.out.println(">> Thank you for playing the game. \n Exiting...");
               }
            });
      
   // Set JFrame Display
      setTitle("Halma: Dog (Player 1) vs Cat (Player 2)");
      //pack();
      setSize(600,600);
      setDefaultCloseOperation(EXIT_ON_CLOSE);
      setLocationRelativeTo(null);
      setVisible(true);
      
   } // end constructor HalmaTest
   
   
   public void actionPerformed(ActionEvent ae)
   {
      //ae.getSource();
      //JLabel jlJelp;
      if(ae.getSource() == jmiRules){
      
         JOptionPane.showMessageDialog(null,
                                      "> Each turn, you move one of your pieces. \n"+
                                      "> Can only be moved to an unoccupied space. \n"+
                                      "> Can move in any direction, vertically, horizontally, diagonally, or backwards. \n"+
                                      "> To move a piece, click on it once, then click on the space you want to move the piece to. \n"+
                                      "> The goal of Halma is to move all of your pieces to your opponent's corner as fast as you can.",
                                      "How to Play",JOptionPane.INFORMATION_MESSAGE,catBread);
         
      } // end if statement jmiRules
      else if(ae.getSource() == jmiReset){ // Create new JFrame of the game
         System.out.println("Game reseted.");
         dispose();
         new HalmaDogAndCat();
      
         setDefaultCloseOperation(DISPOSE_ON_CLOSE);
               
      } // end if statement jmiReset
      
      else {
         MyJButton myButton =(MyJButton)ae.getSource(); 
         myButton.getValidMove( );
         //System.out.println("\nactionPerformed: else statement...");
      } 
   } // end actionPerformed
   
   
   class MyJButton extends JButton{ // Create buttons
   
      private int x;
      private int y;
      private int player; // 1puppyDog  2catBread  0empty
      
      public MyJButton(int x, int y, int player){
         this.x = x;
         this.y = y;
         this.player = player;
         
         if(player == 1){ // puts the image puppyDog into the button
            this.setIcon(puppyDog);
         }
         else if(player == 2){ // puts the image catBread into the button
            this.setIcon(catBread);
         }
         else if(player == 0){
            // set JButton empty
         }
      } // end constructor
      
      public int getPlayer(){
         return this.player;
      } // end accessor getPlayer
      
      public void setPlayer(int player){ // set the destination player to the source player
         this.player = player;
      } // end mutator setPlayer
      
         
      public void getValidMove( ){
         JButton[] surrButtons = new JButton[7]; // create button array for surrounding buttons of the selected piece
         JButton currPiece = bAry[x][y]; // currently selected piece
                
         if(firstMove){
            if(player == 1 || player == 2){
               sourceX = x; // x coordinate of the piece clicked
               sourceY = y; // y coordinate of the piece clicked
               
               firstMove = false;
               //System.out.println("Source if: "+sourceX+","+sourceY);
               System.out.println(">> Option: move piece to the adjacent empty spaces.");
            }
            else{
               //JOptionPane.showMessageDialog(null,"Please make a valid move:\nThere is no player available.");
               System.out.println(">> Invalid move: There is no player available.");
            }
         } // end if statement firstMove
         
         else{
            //System.out.println("\nelse after if firstMove");
            if(player == 0){
               desX = x;
               desY = y;
            // Move the icons
               bAry[desX][desY].setIcon(bAry[sourceX][sourceY].getIcon());
               bAry[sourceX][sourceY].setIcon(null);
            // Change the player  
               bAry[desX][desY].setPlayer(bAry[sourceX][sourceY].getPlayer());
               bAry[sourceX][sourceY].setPlayer(0);
                  
               //System.out.println("Source else: "+sourceX+","+sourceY+" and player is: "+player);
               
               
            // Loop: declare winner
               if((bAry[0][0].getPlayer()==2) && (bAry[0][1].getPlayer()==2) && (bAry[0][2].getPlayer()==2) &&
               (bAry[0][3].getPlayer()==2) && (bAry[1][0].getPlayer()==2) && (bAry[1][1].getPlayer()==2) &&
               (bAry[1][2].getPlayer()==2) && (bAry[2][0].getPlayer()==2) && (bAry[2][1].getPlayer()==2) &&
               (bAry[3][0].getPlayer()==2)){ // if all player 2 is in player 1's original spot
               
                  player = 2;
                  JOptionPane.showMessageDialog(null,"You've WON!","Winner!",JOptionPane.INFORMATION_MESSAGE,catBread);
                  System.out.println(">> You've WON!\nWinner is player: "+player+" <<");
               } // end if statement decalre winner
               
               if((bAry[7][7].getPlayer()==1) && (bAry[7][6].getPlayer()==1) && (bAry[7][5].getPlayer()==1) &&
               (bAry[7][4].getPlayer()==1) && (bAry[6][7].getPlayer()==1) && (bAry[6][6].getPlayer()==1) &&
               (bAry[6][5].getPlayer()==1) && (bAry[5][7].getPlayer()==1) && (bAry[5][6].getPlayer()==1) &&
               (bAry[4][7].getPlayer()==1)){ // if all player 1 is in player 2's original spot
               
                  player = 1;
                  JOptionPane.showMessageDialog(null,"You've WON!","Winner!",JOptionPane.INFORMATION_MESSAGE,puppyDog);
                  System.out.println(">> You've WON!\nWinner is player: "+player+" <<");
               } // end if statement decalre winner
               
               
               
            } // end if player == 0
            
            else{
               JOptionPane.showMessageDialog(null,"Invalid move!","Invalid Move!",JOptionPane.WARNING_MESSAGE);
               System.out.println(">> Please make a valid move.");
            }
            firstMove = true;
         } // end else after if firstMove
         
      } // end method getValidMove
   
   } // end inner class MyJButton
} // end class HalmaTest


/* reference codes: did not work
if(player == 1){
         
            for(int i=0; i<surrButtons.length && i<4; i++){
            
               JOptionPane.showMessageDialog(null,"Please make a valid move.");
               System.out.println("Please make a valid move.");
            
            } // end for loop
            
         } // end if statement player == 1
         else if(player == 2){
            System.out.println("printing cordinate: "+x+" "+y);
            JButton m = bAry[x][y];
            
            
            System.out.println("surrButtons[0]= ((x-1),(y-1));: "+(x-1)+" "+(y-1));
            
                        
         } // end else if statement player == 2
         
         else if(player == 0){ // Check if player of adjacent button is 0
               //System.out.println("printing cordinate..: "+(x+1)+" "+(y+1));
               //m = bAry[x+1][y+1];
            // If player == 0: show options of where user can move the pieces
            JOptionPane.showMessageDialog(null,"Invalid Move.");
               
               //m = bAry[x][y];
            
         } // end else if statement player == 0
         
         
         
         
         
         
         ////System.out.println("bAry[x][y]: "+bAry[x][y]);
         //posOne
         //surrButtons[0] = bAry[x-1][y-1]
         
      // Store/Add cordinates to array surrButtons
         
         
         //surrButtons[0] = {(x-1),(y-1)};//surrButtons[0].add((x-1),(y-1));
         //surrButtons[0].getLocation((x-1),(y-1));
         
         
         ////surrButtons[0] = bAry[(x-1)][(y-1)];
         
         //surrButtons[0] = bAry[x-1][y-1]; // surrButtons[0]: ((x-1),(y-1))
         // surrButtons[1]: ((x-1),(y))
         // surrButtons[2]: ((x-1),(y+1))
         // surrButtons[3]: (x,(y-1))
         // surrButtons[4]: (x,(y+1))
         // surrButtons[5]: ((x+1),(y-1))
         // surrButtons[6]: ((x+1),y) 
         // surrButtons[7]: ((x+1),(y-+))
         
         System.out.println("surrButtons[0]: "+surrButtons[0]);
           

         
*/
<div class="bb-item" id="item2">
  <div class="pagenum"><?=++$page?>/<?=$total?></div>
  <div class="content page2">
    <div class="scroller">
      <div class="light">
          <h3>Solving Problems By Making Them Harder!?</h3>
          <p class="author">- <em>Aashish Satyajith, B.Tech IIIrd year</em></p>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <p>Time and again we’ve been told by our betters that if we can’t solve a problem, try to solve a simpler version of the same problem.
                  And the advice has worked out pretty well too. But would it be actually possible to solve a problem by making it harder than it originally is?
                  Let’s find out!!
                </p>
                <p>
                  Imagine (imagine!) that the Department of Computer Science has been allotted some new land as a part of expansion of the campus.
                  Some of the land was decided to be used to honour an iconic figure in the field of computer science: Alan Turing.
                  To do this, a big square courtyard would be constructed, divided into unit squares, at the centre of which a statue of Alan Turing would be placed in a single unit square.
                   Recognizing the importance of the binary system, we insist that the dimensions of the square be a power of two.
                </p>
                <p>
                  We hire a genius architect, Jed Mosley, to get the job done. As we all know, Jed (like most geniuses) is a little bit eccentric, and <i>he</i> insists that the tiles used for the courtyard be of a particular L-shape as such:
                </p>
                <div class="img"><img src="./images/articles/tile.jpg"></div>
                <p>The next figure then represents a valid tiling:</p>
                <div class="img"><img src="./images/articles/validtile.jpg"></div>
                <p>But now, we have problem. How exactly are we supposed to know that there’s going to be a valid tiling for any n that we choose? How do we know, that after the tiling, there would be a square left in the centre to place Turing’s statue? Is there a way out?</p>
                <p>Challenge accepted. We need to prove that there’s a valid tiling leaving a square in the centre empty for any n that we choose. Well the only two proof techniques that we’re largely familiar with are proof by induction and proof by contradiction, and the latter doesn’t seem to be the guy for the job. Onward with induction then:</p>
                <p><strong>Attempt #1:</strong></p>
                <p>Let P(n) be the proposition that there exists a tiling of a 2<sup>n</sup> x 2<sup>n</sup> courtyard with a square remaining empty in the centre.</p>
                <p><strong>Base case: </strong>P(0) is obviously true, since at n = 0, all we have is a 1 x 1 square and we can put Turing’s statue there.</p>
                <p><strong>Inductive step:</strong>  Assume that  P(n) is true. We must prove that there is a way to tile a 2<sup>n+1</sup> x 2<sup>n+1</sup> courtyard with a square empty in the centre, i.e. that P(n + 1) is true.</p>
                <p>We divide the 2<sup>n+1</sup> x 2<sup>n+1</sup> courtyard into four, and we get four squares of dimension 2<sup>n</sup> each. Each 2<sup>n</sup> x 2<sup>n</sup> square has a square at its centre empty, by the induction hypothesis.</p>
                <p>Uh oh...trouble!! We can’t bring together the four empty squares in the centre of the four “quadrants” to form a tiling with one empty square!! In other words, we can’t prove this hypothesis!! Ah...nostalgia from that last discrete math exam ;-)</p>
                <p>Well we're not giving up yet, let’s chuck the old hypothesis and start with a new one:</p>


              </div>
              <div class="col-md-6">
                <p><strong>Attack #2:</strong></p>
                <p><strong>Proof:</strong> Let P(n) be the proposition that there exists a tiling of a 2<sup>n</sup> x 2<sup>n</sup> courtyard with a square remaining empty <i>ANYWHERE</i> we want.</p>
                <p>At this point, you’re probably saying: “Wait – what!? Life is already difficult enough as it is trying to prove the hypothesis for a SINGLE square and now you want to try to prove the hypothesis for ALL the squares? Are you out of your mind!?”</p>
                <p>Relax. This is a standard technique in induction: if you can’t prove an inductive hypothesis, try to prove a - wait for it - grander one. How does that help us? Allow me to demonstrate:</p>
                <p><strong>Base case:</strong> P(0) is true as earlier – because there’s only one square, we can just put the statue there.</p>
                <p><strong>Inductive step:</strong> Assume that P(n) is true.</p>
                <p>Now to prove that P(n + 1) is true:</p>
                <p>As earlier we split up the 2<sup>n + 1</sup> x 2<sup>n + 1</sup> square into four and obtain squares of dimension 2<sup>n</sup> x 2<sup>n</sup> each. Place Turing's statue anywhere in the one of these squares (marked S in the picture below). Because we’re guaranteed to find a single square empty in each of the four quadrants wherever we want them (that's the induction hypothesis), let’s put the empty squares in the remaining three squares of each 2<sup>n</sup> x 2<sup>n</sup> square as such:</p>
                <div class="img"><img src="./images/articles/statue.png"></div>
                <p>Now the rest is pretty obvious: place an L-shaped tile covering the squares marked X!! And so P(n) implies P(n + 1), and by principle of mathematical induction, the statement is true for all n!! And since we can place Turing's statue anywhere now, it follows that we can place it at the center. All of us (including Jed) can go home happy!!</p>
                <p>So in a way we managed to get to the solution by making our problem harder than it originally was. How did that work? It worked because induction works by assuming that whatever we’re trying to prove is true. The stronger the hypothesis, the more...liberal...our assumption is. In our case, assuming that you can have an empty square <i>anywhere</i> in the 2<sup>n</sup> square turned out to be far more powerful than assuming that you can have a square (specifically) at the centre. We simply exploited this as a tool to get to our solution.</p>
                <p>And that’s how you solve problems by making them harder :-)</p>
                <p>P. S. Did you notice something else? The proof actually gives an algorithm to find a tiling!! Can you work out the details?</p>
                <p></p>
                <p><i>Adapted from Mathematics for Computer Science, Leighton et al (2012). A print version of this book has not been published yet.</i></p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

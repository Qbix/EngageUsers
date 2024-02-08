(function (window, Q, undefined) {

/**
 * @module EngageUsers
 */
	
/**
 * YUIDoc description goes here
 * @class EngageUsers cool
 * @constructor
 * @param {Object} [options] Override various options for this stream
 *  @param {Q.Event} [options.onMove] Event that fires after a move
 */

Q.Streams.define("EngageUsers/cool", function () { // stream constructor
	this.onMove = new Q.Event(); // an event that the stream might trigger
}, {
	someMethod: function () {
		// a method of the stream
	}
});

// this is how you set an event handler to be triggered whenever
// any "EngageUsers/move" message is posted to any "EngageUsers/cool" stream
Q.Streams.onMessage("EngageUsers/cool", "EngageUsers/move").set(function (err, message) {
	// trigger our event
	this.onMove.handle(JSON.parse(message.instructions));
}, "EngageUsers");

})(window, Q);
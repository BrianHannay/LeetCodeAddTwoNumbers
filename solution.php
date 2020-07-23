<?php

/**
 * Problem:
 * https:/leetcode.com/problems/add-two-numbers/
 * You are given two non-empty linked lists representing two non-negative
 * integers. The digits are stored in reverse order and each of their nodes
 * contain a single digit. Add the two numbers and return it as a linked list.
 *
 * You may assume the two numbers do not contain any leading zero, except the
 * number 0 itself.
 *
 * Solution:
 * Create a starting node.
 * While there are still any numbers to add:
 *   Create a new node on the result, and advance to it. Add the two numbers plus
 *   any carry, and temporarily store the result. Set the current node's value to
 *   the result modulus 10. If the result is 10 or more, set the carry to true.
 *   Advance the input list.
 * Return the node after the starting node.
 */

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $startNode = new ListNode();
        $curNode = $startNode;
        while(!is_null($l1) || $carry || !is_null($l2)) {
            $curNode->next = new ListNode();
            $curNode = $curNode->next;
            $sum = $l1->val + $l2->val + $carry;
            $curNode->val = $sum % 10;
            $carry = $sum >= 10;
            $l1 = $l1->next;
            $l2 = $l2->next;
        }
        return $startNode->next;
    }
}
